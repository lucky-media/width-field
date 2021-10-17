# Width Field

A beautiful way to let users choose from custom widths. You can enable/disable when adding the Fieldtype to the Blueprint.

### Available Widths
- Full
- Half
- One Third
- Two Thirds
- One Quarter
- Three Quarters


## How to Install
You can search for this addon in the `Tools > Addons` section of the Statamic control panel and click **install**, or run the following command from your project root:

``` bash
composer require lucky-media/width-field
```

Optionally you can publish the configuration file if you want to edit the *labels*.

```bash
php artisan vendor:publish --tag=config
```

## How to Use

On the blueprint where you want to include it ( ex. Posts, Pages etc. ) search for `Width`, enable your preferred sizes, and you are done.

On your template you will get the `slugified` version of each field:

```bash
{{ width }}
```

This will render one of the following options:
- full
- half
- one-third
- two-thirds
- one-quarter
- three-quarters

## Commercial addon
Width Field is a commercial addon - you **must purchase a license** via the [Statamic Marketplace](https://statamic.com/addons/lucky-media/width-field) to use it in your project.

## 🐞 Bugs and 💡 Feature Requests
Please refer to the issues tab to submit a Bug or a Feature Request.
