<h1 align="center">Announcer Plugin</h1>

<p align="center">
    <strong>An automated announcement plugin for your PocketMine-MP Server.</strong>
</p>

<p align="center">
  <a href="#features">Features</a> •
  <a href="#configuration">Configuration</a>
</p>

---

### Features

- Automatically broadcasts customisable messages at regular intervals to keep your players engaged.
- Supports message prefixes to add a distinct identity to your announcements.
- Configurable interval between each message, allowing you to fine-tune the frequency.
- Easy-to-use configuration file for managing messages and settings.

### Configuration

The plugin's configuration file `config.yml` allows you to customise various aspects of the Announcer plugin:

```yaml
# Configuration for The Announcer plugin

# The prefix message
# Use '&' for colors
prefix: "&r&8[&aAA&8] "

# Enable/disable the use of prefixes.
# true = on, false = off
use-prefix: true

# Interval between each message in ticks (20 ticks per second) (Default: 1200 ticks = 1 minute)
interval: 1200

# List of messages to be broadcasted
# Use '&' for colors, Use `\n` to break the line
messages:
  - "&r&aWelcome to the server! \n&r&7Read /rules!"
  - "&r&7Enjoy your stay!"
  - "&r&6Visit our website at www.example.com"
```