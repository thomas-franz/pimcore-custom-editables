# Pimcore CustomEditablesBundle
A collection of some useful pimcore editables, still needs some work. This Bundle is still a development version and not recommended for any other use.

### Installation

```json
"repositories": [
  {
    "type": "package",
    "package": {
      "name": "thomas-franz/pimcore-custom-editables",
      "version": "1.0",
      "type": "pimcore-bundle",
      "source": {
        "url": "https://github.com/thomas-franz/pimcore-custom-editables",
        "type": "git",
        "reference": "main"
      }
    }
  }
],
"require": {
  "thomas-franz/pimcore-custom-editables": "^1.0"
},
```

### Enable Bundle
- Execute: $ `bin/console pimcore:bundle:enable CustomEditablesBundle`
