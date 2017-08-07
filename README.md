# MITlib Private Debug Log

[![Build Status](https://travis-ci.org/MITLibraries/mitlib-private-debug-log.svg?branch=master)](https://travis-ci.org/MITLibraries/mitlib-private-debug-log)
[![Code Climate](https://codeclimate.com/github/MITLibraries/mitlib-private-debug-log/badges/gpa.svg)](https://codeclimate.com/github/MITLibraries/mitlib-private-debug-log)
[![Issue Count](https://codeclimate.com/github/MITLibraries/mitlib-private-debug-log/badges/issue_count.svg)](https://codeclimate.com/github/MITLibraries/mitlib-private-debug-log)

This is a small Wordpress plugin that moves the debug log outside the web root folder.

The approach in this plugin was originally shared by [WebAware in a gist](https://gist.github.com/webaware/4969753), and in a [StackOverflow thread](https://wordpress.stackexchange.com/a/84171).

## Configuration

To use, edit the value of `$debuglog` to specify a path outside the server's web root. Enable the plugin, and make sure messages are being written. If you need to troubleshoot the plugin itself, you might find it easier to set to debug log to a different location temporarily:

```
$debuglog = WP_CONTENT_DIR . '/uploads';
```

*Important* Please make sure the debug log exists, and that the file permissions are set correctly. The plugin is currently incapable of creating the log itself. Check the status of other log files in your chosen directory for guidance.
