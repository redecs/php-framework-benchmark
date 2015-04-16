# PHP Framework Benchmark

This is a fork from Kenjis' [PHP Framework Benchmark](https://github.com/kenjis/php-framework-benchmark), with some modifications to run on the nginx + PHP-FPM stack.

## Frameworks to Benchmark

* Phalcon 1.3
* Slim 2.6
* CodeIgniter 3.0
* Yii 2.0
* Silex 1.2
* BEAR 1.0
* Symfony 2.6
* Laravel 5.0
* Zend Framework 2.4
* Lumen 5.0

## Results

These are my benchmarks, not yours. I encourage you to run on your environments.

### Hello World Benchmark

(2015/04/16)

|framework          |requests per second|relative memory |
|-------------------|------------------:|---------------:|
|no-framework       |            5864.86|            0.25|
|phalcon-1.3        |            2754.47|            0.50|
|slim-2.6           |            1096.43|            0.50|
|codeigniter-3.0    |             504.36|            0.50|
|yii-2.0            |             543.57|            1.75|
|silex-1.2          |             576.54|            1.00|
|lumen-5.0          |             554.75|            1.25|
|bear-1.0           |             661.25|            1.00|
|symfony-2.6        |             212.26|            3.00|
|laravel-5.0        |              97.58|            2.75|
|zf-2.4             |              95.35|            3.25|

Note(1): All the results are run on php with phalcon.so. If you don't load phalcon.so, the rps except for Phalcon probably increase.
