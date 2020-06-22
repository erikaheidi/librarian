---
title: Dev&Chill: Minicrawler Part 4
published: true
description: This post has a summary of what we've built in the fourth and last episode of Dev&Chill - Minicrawler Project.
tags: PHP, videos, twitch, live
thumb_image: /images/thumb/dac_minicrawler_04.png
---

In this Dev&Chill project, we're creating a URL crawler.
These can be used, for instance, to fetch data from public APIs or crawl a website for content. 
Here, I'll use it to obtain and keep track of view changes in my DigitalOcean tutorials.

This is **part 4** out of 4.

_This stream has no voice over; just music, coding, and captions._

{% youtube 6RbYRM8gSR8 %}

## Episode Summary

In this episode, we finish our work on the Minicrawler application. We include the article URLS we want to monitor in the application config file, so that we can
loop through all of the articles and obtain their views. We then set a crontab entry to execute the command every day.

### Requirements

- `php-cli` >= 7.2
- `php-curl`
- Composer

### Relevant Links

- [Project Repository on Github](https://github.com/minicli/minicrawler)
- [Minicli Documentation](https://docs.minicli.dev)


