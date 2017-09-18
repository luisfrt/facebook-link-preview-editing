# Facebook Link Preview Editor #

Open Source Facebook Link Preview Restriction Workaround

###  Why can't I edit link previews anymore on Facebook? ### 

As part of Facebook's continuing efforts to stop the spread of misinformation and false news on their platform, they are removing the ability for any Page to edit how a link appears on Facebook. By removing the ability to alter link metadata (i.e. headline, description, image) from all link sharing entry points on Facebook.


### Can I edit facebook's link previews with this workaround? ###

The short answer is **yes**.

For what can I use this workaround for? Only for **legitimate purposes**. For instance: "If you are a blog owner, certain blog platforms uses the same metalinks for all blog pages. Therefore all of your Facebook link previews would be the same for all links on your website." This means that if you share a new post from your blog, facebook preview won't reflect your post content.


### How this workaround works? ###

Basically, facebook previews your page (the link you paste on facebook) by searching for meta information to display on your post preview.

This workaround consists of two steps:

**Step 1 - Page "fb-link-preview-editor.html"** - This page generates the CUSTOM link for your post on facebook (after generating it, you only need to copy and paste it on your facebook timeline). The link generated will point to page "fb-redirect.php" passing the custom information you provided as GET parameters to the page, then it will create a html page with your custom meta information (this is what the facebook preview engine will read) then it will redirect the user to the right page (the REAL link that you want people to access).

**Step 2 - Page "fb-redirect.php"** - It's a custom page that dynamically generates a html page with your custom meta information. It also has an auto-redirect javascript code to redirect users to the right page. 


### How can I install it? ###
You only need to copy this project files into your blog/website server (make sure that fb-link-preview-editor.html and fb-redirect.php are in the same folder). 

You need to edit the content for the fb:app id tag in the fb-redirect.php page with your blog facebook id "\<meta property="fb:app_id" 		  content="xxxxxxxxxxxxxxx" />" (if you don't know what that is, check this website: https://developers.facebook.com/docs/apps/register/)

**Then, all you need to do is access the fb-link-preview-editor.html page and fill-in the form with the custom information you want facebook link preview to show.**

### Fake news restriction ###

This workaround must NOT be used to spread fake news or misleading information! 
I repeat: **"This workaround must NOT be used to spread fake news"!**

This workaround should only be used for legitimate purposes.
