---
title: Dev&Chill: Minicrawler Part 1
published: true
description: This post has a summary of what we've built in the first episode of Dev&Chill - Minicrawler Project.
tags: PHP, videos, twitch, live
thumb_image: /images/thumb/dac_minicrawler_01.png
---

In this Dev&Chill project, we're creating a URL crawler.
These can be used, for instance, to fetch data from public APIs or crawl a website for content. 
Here, I'll use it to obtain and keep track of view changes in my DigitalOcean tutorials.

This is **part 1** out of 4.

_This stream has no voice over; just coding, and captions. Due to an error, the music track was not properly included in this video._

{% youtube okk57g_bUTs %}

## Episode Summary

In this episode, we bootstrap a new Minicli application and use another small library called [minicli/curly](https://github.com/minicli/curly) to fetch content from remote public APIs.
We first try out the Chuck Norris API, then we end up using an advices API to fetch random pieces of wisdom / advice slips.

### Requirements

- `php-cli` >= 7.2
- `php-curl`
- Composer

### Relevant Links

- [Project Repository on Github](https://github.com/minicli/minicrawler)
- [Minicli Documentation](https://docs.minicli.dev)
- [Chuck Norris API](https://api.chucknorris.io/)
- [Advices API](https://api.adviceslip.com/)

