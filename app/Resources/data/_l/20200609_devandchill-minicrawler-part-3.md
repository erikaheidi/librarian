---
title: Dev&Chill: Minicrawler Part 3
published: true
description: This post has a summary of what we've built in the third episode of Dev&Chill - Minicrawler Project.
tags: PHP, videos, twitch, live
thumb_image: /images/thumb/dac_minicrawler_03.png
---

In this Dev&Chill project, we're creating a URL crawler.
These can be used, for instance, to fetch data from public APIs or crawl a website for content. 
Here, I'll use it to obtain and keep track of view changes in my DigitalOcean tutorials.

This is **part 3** out of 4.

_This stream has no voice over; just music, coding, and captions._

{% youtube 6RbYRM8gSR8 %}

## Episode Summary

In this episode, we continue working on the Minicrawler application. This time around, we'll be refactoring what we built so far,
organizing the SQLite code into a dedicated DB Service.

### Requirements

- `php-cli` >= 7.2
- `php-curl`
- Composer

### Relevant Links

- [Project Repository on Github](https://github.com/minicli/minicrawler)
- [Minicli Documentation](https://docs.minicli.dev)
- [DomDocument Documentation](https://www.php.net/manual/en/class.domdocument.php)
- [SQlite3 Documentation](https://www.php.net/manual/en/class.sqlite3)

