# Matrix Multi-Domain Selector

The purpose of this project is to allow you to specify a Matrix server configuration for a specific domain. This is useful if you want to provide multiple instances of Matrix when the domains point to a single virtual directory.

## Web server configuration

**Note.** As of 2023-06-07, these are untested rewrite configurations.

### Nginx

```
rewrite ^/.well-known/matrix/server /path/to/matrix.php?domain=$host break;
```
