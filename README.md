# Custom HTML Page

An add-on for XenForo to give you 1 custom HTML page to use. It is used at https://www.apantic.com for a homepage.

To install, upload the files contained in /upload and install using the .xml file.

To set up the page, use the template `acomhomepage_layout` to set up the html head and layout. Be aware of certain variables in there; do not remove variable configurations (such as `$title`, `$contents`). Use the templates `acomhomepage` and `acomhomepage.css` to setup the page body.

The phrase `acomhomepage` is used to determine what users are shown as viewing when viewing this page.

If you want to make this your homepage: Set your index route in `Options -> Basic Board Settings` to `home/`

If you want to use this for another page (other than a homepage), you will have to make a few changes prior to the route filters update:
1. Enable debug mode (config.php: `$config['debug'] = 1;`)
2. Go to http://yourwebsite/admin.php?route-prefixes/ (or `Admin -> Development -> Route Prefixes`) and edit the `home` route prefix to whatever you wish to call it
3. Edit `/library/Apantic/ACOMHomepage/Route/Prefix/Home.php` and change `home` on line 17 to whatever you want the route to be called.

If you are using a newer version of XenForo (XF 1.2+), you should be able to use route filters for this purpose. See: https://xenforo.com/help/route-filters/

Also see: https://xenforo.com/community/resources/n-custom-html-page-for-homepage.5332/

## Legal Stuff
   Copyright Apantic Limited

   Licensed under the Apache License, Version 2.0 (the "License");
   you may not use this file except in compliance with the License.
   You may obtain a copy of the License at

       http://www.apache.org/licenses/LICENSE-2.0

   Unless required by applicable law or agreed to in writing, software
   distributed under the License is distributed on an "AS IS" BASIS,
   WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
   See the License for the specific language governing permissions and
   limitations under the License.
