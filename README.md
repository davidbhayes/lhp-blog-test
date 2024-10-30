# LHP-Blog-Test

## Setup

Prerequisites: a way to run Laravel applications. I use Laravel Valet, but Herd, Docker, etc are possible.

1. First clone the repo:
```bash
git clone git@github.com:davidbhayes/lhp-blog-test.git
cd lhp-blog-test
```
2. Install dependencies (for development)
```bash
composer install 
```
3. Install front-end dependencies
```bash
npm install 
```
... flesh out more later


## Approach and Assumptions

To keep things simpler and to get auth for free, I've used Laravel Breeze and Vue/Inertia. 
I did not set up SSR or any other niceties because they seems superfluous.

## Extra Dependencies

(none so far)
