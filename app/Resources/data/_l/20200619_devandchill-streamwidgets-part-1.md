---
title: Dev&Chill: StreamWidgets Part 1
published: true
description: This post has a summary of what we've built in the first episode of Dev&Chill - StreamWidgets Project.
tags: PHP, videos, imagick, twitch, live
thumb_image: images/thumb/dac_streamwidgets_01.png
---

In this new Dev&Chill project, we're creating dynamic image widgets.
These can be used, for instance, with OBS Studio as an overlay, or as a social media thumbnail card.

This is first part of the **Dev & Chill: StreamWidgets series**.

_This stream has no voice over; just music, coding, and captions._

{% youtube mbifD7DyfOA %}

## Episode Summary

In this episode, we bootstrap a new [Minicli](https://github.com/minicli/minicli) application and create an
animated GIF widget for OBS Studio using Imagick, the PHP wrapper around Imagemagick.

I first create an image with a static text, then later on I obtain content from a file, which is the log file that contains the "now playing" information I'm logging.
I include the image from OBS, and then I turn it into a colorful animated GIF image.

### Requirements

- `php-cli` >= 7.2
- `php-imagick`
- Composer

### Relevant Links

- [Minicli Documentation](https://docs.minicli.dev)
- [Imagick Documentation](https://www.php.net/manual/en/class.imagick)