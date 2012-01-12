About
============

Bundle hat helps to develop Backbone.js projects with Symfony2. The bundle comes with the latest Backbone-Version and
some Commandline tools

[![Build Status](https://secure.travis-ci.org/RtxLabs/BackboneBundle.png)](http://travis-ci.org/RtxLabs/BackboneBundle)

Installation
============

## Installation

### Step 1) Get the bundle

First, grab the RtxLabsBackboneBundle. There are two different ways
to do this:

#### Method a) Using the `deps` file

Add the following lines to your  `deps` file and then run `php bin/vendors
install`:

```
[RtxLabsBackboneBundle]
    git=https://github.com/RtxLabs/BackboneBundle.git
    target=bundles/RtxLabs/BackboneBundle
```

#### Method b) Using submodules

Run the following commands to bring in the needed libraries as submodules.

```bash
git submodule add https://github.com/RtxLabs/BackboneBundle.git vendor/bundles/RtxLabs/BackboneBundle
```

### Step 2) Register the namespaces

Add the following namespace entry to the `registerNamespaces` call
in your autoloader:

``` php
<?php
// app/autoload.php
$loader->registerNamespaces(array(
    // ...
    'RtxLabs' => __DIR__.'/../vendor/bundles',
    // ...
));
```

### Step 3) Register the bundle

To start using the bundle, register it in your Kernel:

``` php
<?php
// app/AppKernel.php

public function registerBundles()
{
    $bundles = array(
        // ...
        new RtxLabs\BackboneBundle\RtxLabsBackboneBundle(),
    );
    // ...
)
```

Usage
============


TODO
============

* Write a decent documentation
* Implement interactive commandline tools for generating backbone artifact files