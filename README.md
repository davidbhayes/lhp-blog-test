# LHP-Blog-Test

## Setup

Prerequisites: a way to run Laravel applications. I use Laravel Valet, but Herd, Docker, etc are possible. 
Mostly you MUST have `composer` and `npm` installed, which means you'll also need PHP and NodeJS. 

1. First clone the repo:
```bash
git clone git@github.com:davidbhayes/lhp-blog-test.git
cd lhp-blog-test
```
2. Install PHP dependencies (for development)
```bash
composer install 
```
3. Install front-end dependencies
```bash
npm install 
```
4. To develop, you'll want to keep the JS build process running. You'll use:
```bash
npm run dev
```

Alternatively (and extra useful if you want to use the PHP development server instead of Valet or similar) use the command: 

```bash
composer run dev
```

Both of these commands will run the Vite-watcher build process for you. 

## Approach and Assumptions

To keep things simpler and to get auth for free, I've used Laravel Breeze and Vue/Inertia. 
I did not set up SSR or any other niceties because they seemed superfluous.

**I've not gotten nearly as far as I'd have liked**, which leaves most of the project quite undone. Chiefly:

1. I'm not satisfied with the unstyled, URL-findable-only way you CAN create and edit blog posts
2. Deleting blog posts is not currently possible via any controller method
3. Neither the data-model nor any interactives are set up for "Following"
4. Nor is the queue & mail notification system

## Personal Reflections

Overall my biggest downfall is that working in Vue within Laravel/Inertia felt more foreign than I hoped. 
And I spent too much time on dumb issues, like forgetting to `return` a response and assuming the issue was deeper than that ;p.
I learned a lot about working with Vue in Laravel from this test, but not quickly enough for the time I planned after CascadiaPHP.

I would not hire me seeing this submission. 
I'm not sure how much I expect these kind of pre-conversation coding tests in the job application process, 
but I feel very conflicted about the time limit and goal I set for myself based on how this went.
Something to learn from...

Similarly, I should have replied more quickly and more openly asked my question about expectations. 
Again I found myself making assumptions vs asking, which remains a growing edge. 

## Extra Dependencies

(none)
