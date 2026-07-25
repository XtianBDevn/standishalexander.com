---
title: "Building TalkBack: A Feedback Loop for Music Producers, Shipped as a SaaS"
date: 2026-07-25T10:00:00-04:00
draft: false
categories: ["SaaS"]
author: "Bon Air Media"
image: "/uploads/talkback/talkback-waveform-notes.svg"
description: "How we designed and built TalkBack — a SaaS that turns the messy bounce-notes-revise loop of music production into timestamped notes, A/B versions, sign-off chains, and stem delivery."
faq:
  - q: "What is TalkBack?"
    a: "TalkBack is a SaaS platform for music producers and engineers that replaces email chains and voice memos with timestamped notes pinned directly to the waveform, version A/B comparison, sequential sign-off chains, and stem delivery."
  - q: "What stack is TalkBack built on?"
    a: "The API is async FastAPI with SQLAlchemy 2.0 on PostgreSQL (TimescaleDB), with Redis and Celery for background audio processing, S3-compatible storage, and a Next.js 14 front end using Wavesurfer.js for waveform rendering."
  - q: "Can TalkBack run without Docker?"
    a: "Yes — a single run-local.sh script boots the whole product on SQLite and local disk storage with nothing else to install, which was a deliberate design goal for developer experience."
---

Every mix that has ever been finished was finished the same way: somebody bounced it, somebody else sent notes, the engineer revised, a new version went out, and eventually — sometimes weeks later — everyone signed off and stems were delivered. The loop is universal. The tooling for it, somehow, is still email, Dropbox links, and voice memos that say *"the thing at like a minute forty."*

<!--more-->

TalkBack is our answer to that. It's the engineer's channel into the session — and building it taught us as much about product scoping as it did about audio.

## Model the loop, not the features

The temptation with a producer tool is to start listing features: comments! sharing! versioning! We started somewhere narrower — we wrote down the actual loop and refused to build anything that wasn't an arrow in it:

![The producer loop: bounce → notes → revise → version → approve → master](/uploads/talkback/talkback-loop.svg)

**Bounce → notes → revise → new version → approval → master.** Every object in the data model is a noun in that sentence. A *note* belongs to a timestamp on a *version*; a *version* belongs to a chain that ends in an *approval*; an approval unlocks *stem delivery*. When a feature idea didn't map onto the loop, it didn't ship.

## Notes live on the waveform

The core interaction is the one in the image at the top of this post: you click a point on the waveform and the note is pinned to that exact moment, attributed, and threaded. "The thing at a minute forty" becomes `01:47 — keep the delay throw`, and when the next version lands, every note carries a resolved / unresolved state against it.

Wavesurfer.js renders the waveform on the Next.js front end; note markers are an overlay driven by the same time axis, so a note is just `(version_id, timecode, author, body, state)` — boring on purpose.

## The stack

The brief called for a production-shaped SaaS, not a demo:

- **API** — FastAPI (async) with SQLAlchemy 2.0
- **Database** — PostgreSQL via TimescaleDB
- **Queue** — Redis + Celery for audio processing, emails, and exports
- **Storage** — S3-compatible (MinIO locally, AWS S3 + CloudFront in production), encrypted at rest
- **Search** — Elasticsearch, but optional: the API degrades gracefully to SQL when it's absent
- **Web** — Next.js 14 App Router, TypeScript, Tailwind, TanStack Query, Zustand

That "optional Elasticsearch" line is a philosophy, not a footnote. Every heavyweight dependency has a fallback, which is what makes the next part possible.

## `./run-local.sh` — the whole product, no Docker

The thing we're proudest of isn't in the feature list. It's that a new developer — or a curious producer — can clone the repo and run one script:

```bash
./run-local.sh   # SQLite + local disk. Nothing else to install.
```

No Postgres, no Redis, no MinIO, no Docker. The app boots on SQLite and local disk, and the full production topology (`docker compose up --build`) is there when you want it. Only three ports ever touch the host, so it can't collide with whatever else you're running.

We think of this as **developer-experience-first architecture**: if trying the product costs less than reading its README, adoption takes care of itself.

## What we'd tell you to steal

1. **Write the loop before the schema.** The six-word sentence did more design work than any wireframe.
2. **Make every dependency optional or invisible.** Fallbacks (SQLite, SQL search) turn a heavyweight stack into a one-command demo.
3. **Attach feedback to coordinates, not conversations.** Timestamps on a waveform, pixels on a design, lines in a diff — feedback anchored to a *place* resolves itself; feedback in a thread never dies.

TalkBack is the kind of build we do at Bon Air Media — strategy, full-stack development, and shipping, under one roof. If you've got a loop in your business that's still running on email and voice memos, [we should talk](https://www.bonairmedia.com/#contact).
