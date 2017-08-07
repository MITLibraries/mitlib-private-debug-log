# MITlib Private Debug Log

This is a small Wordpress plugin that moves the debug log outside the web root folder.

The approach in this plugin was originally shared by [WebAware in a gist](https://gist.github.com/webaware/4969753), and in a [StackOverflow thread](https://wordpress.stackexchange.com/a/84171).

To use: edit the value of `$debuglog` to specify a path outside the server's web root. Enable the plugin, and make sure messages are being written.
