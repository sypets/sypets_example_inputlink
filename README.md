Example for reproducing TYPO3 Issue:

* https://forge.typo3.org/issues/99766
* https://forge.typo3.org/issues/99767

FormEngine input type="input", renderType="inputLink" in v11 and v12.

FormEngine input type="link" in v12.

The goal is the following:

* show allowed file extensions (.bib) in the form and link browser (as is the case in type="inline")
* do not show "Add new media asset" in link browser

## Supported versions

* Tested with TYPO3 latest main branch (v12)


## Install

Without Composer:

```shell
git clone https://github.com/sypets/sypets_example_inputlink.git
```

With Composer:

Add to composer.json:

```json
"repositories": {
		"sypets_example_inputlink": {
			"type": "git",
			"url": "https://github.com/sypets/sypets_example_inputlink.git"
		}
},
```

Run:

```shell
composer require sypets/sypets-example-inputlink:dev-main
```

## Reproduce

To reproduce, see issue
