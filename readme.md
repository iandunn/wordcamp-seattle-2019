This is a static version of the [WordCamp Seattle 2019](https://2019.seattle.wordcamp.org) site, to make it easy to collaborate on the content and custom CSS before the site is launched. This avoids having to share database dumps, or setup a shared remote staging site.

### Development

#### Setup this repo locally

1. `git clone https://github.com/iandunn/wordcamp-seattle-2019.git`
1. `npm install`
1. Send the Git repo owner your GitHub username, so they can add you to the team, allowing you to `push` changes
1. Install the LiveReload browser extension, so you don't have to refresh manually. [Firefox](https://addons.mozilla.org/en-US/firefox/addon/livereload-web-extension/), [Chrome](https://chrome.google.com/webstore/detail/livereload/jnihajbhpnppcggbcgedagnkighmdlei).

#### Development workflow

1. `git pull`
1. `npm start`: Run the linter and build the CSS file, watching scss files for changes. Also turns on the livereload server.
1. Load the `index.php` file in your browser, with a `page` param that matches the content template. e.g., `index.php?page=front-page`.
1. Edit the SCSS files to match the mockup.
1. `npm run lint` and fix any violations.
1. `npm run build` to get a final CSS file suitable for production.
   1. _@todo this may not be needed since `wordcamp-remote-css` will minify, but confirm that._
1. `git commit`
1. `git pull --rebase`
1. `git push`

#### Creating/editing the static HTML files

1. Setup a fresh WP site locally
1. Delete the wp-content folder
1. Download and extract https://github.com/WordPress/wordcamp.org/archive/production.zip
1. Move the wordcamp.org `wp-content` folder into your local installation
1. Activate the CampSite 2017 theme and all the plugins.
1. Setup the basic content elements for the area you want to work on: menus, widgets, etc. The content inside them can be placeholders, you just need the containers to match what will eventually be on production. CampSite 2017 provides lots of widget areas that can be helpful, especially with the Custom HTML widget.
1. Open the front end of the site, view-source, and copy-paste the relevant parts into the corresponding static HTML page in `template-parts/`.

### Production site

When you're ready to launch:

1. Turn on Coming Soon mode, so visitors don't see the site in transition
1. Switch to the CampSite 2017 theme
1. Configure Remote CSS to point to the built `style.css` file in the GitHub repo
1. Create nav menus, widgets, etc to match what's in the static HTML files
1. use the Additional CSS panel in the Custmoizers to quickly/easily make any tweaks that are needed
1. Setup the webhook so that pushing changes to the Git repo automatically deploy them to the production site (see Remote CSS on-screen help).
1. Move the Additional CSS tweaks to the Git repo so that everything is in one place and consistent.
1. Turn off Coming Soon mode

### TODO

- Can get rid of custom .stylelintrc.json and just rely on wp coding standard plugin?
- Fix any `@todo` notes throughout the repo.

### Using this approach for other camps

This approach works well if you've already turned off Coming Soon mode, so that you can start publishing posts.

If you have time to develop on the production site instead, then that's probably easier than doing this.

For other ideas, check out [the handbook](https://make.wordpress.org/community/handbook/wordcamp-organizer/first-steps/web-presence/contributing-to-wordcamp-org/setting-up-a-local-wordcamp-org-sandbox/).

This might not be needed in the future if [some improvements](https://make.wordpress.org/community/?p=21752&preview=true) are made to the Coming Soon feature.

### Credits

This borrows a lot of tooling etc from [wcus/wcus-2019](https://github.com/wcus/wcus-2019/graphs/contributors), props @ryelle [et al](https://github.com/wcus/wcus-2019/graphs/contributors).
