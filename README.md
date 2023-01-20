# Divi Restore Theme Builder Templates
The Plugin can be used for recovering missing Theme Builder Templates only. 

Once all the missing templates are restored, make sure the Plugin is deactivated and deleted from your server.

## Install the Plugin
1. Download the Plugin using the big Green Button on the top right side
2. Login to your WordPress Dashboard and navigate to Plugins > Add New
3. From the top area, click on Upload Plugin
4. Choose the zip file downloaded at step 1

## How to use the Plugin

### Step 1

Once the Plugin is installed and activated, you will see 3 new Custom Post Types in your dashboard:
- Templates
- Header Templates,
- Body Templates,
- Footer Templates. 

![image](https://user-images.githubusercontent.com/1719735/213647370-c22db184-599d-4bf9-8404-d36943d2a3a9.png)


You can use the new options (custom post type) to check and restore any Theme Builder Templates areas. Accessing the new areas: Header Templates, Body Templates, Footer Templates will give access to any template areas previously used in your Theme Builder Templates.

Once you have identified the template areas, you can edit them just like any regular post/pages and save them to your Divi Library. 

In this Video: https://www.dropbox.com/s/s5fo3j0o3x9xn61/video-1.mp4?dl=0, the Custom Body template assigned to All Post Template in Theme Builder is saved to the Divi Library.

**Note:** it would be a good practice to prefix all the Templates Pars (Body, Header, Footer) with the name of that template part. In the previous video, the Body prefix was used since that is a Custom Body Template. Keeping a consistent name will quickly help you identify each template part (Custom Body, Custom Header, Custom Footer).

### Step 2
Once the template parts were saved to the Divi Library, the next step is to **recreate and reassign the missing template**.

In Divi > Theme Builder, recreate each of the missing templates, assign them, and use the **Add from Divi Library** option to add back the part of the template saved at step 1.

In this video, the template that is being recreated is for All Posts:  https://www.dropbox.com/s/xa4a6vdy3d84uik/video-2.mp4?dl=0

### Step 3
Once everything is restored, **please, deactivate and delete the plugin from your server**.

## Use the plugin on a Mutisite WordPress installation

Make sure that the plugin is activated on a sub-site level and not on the Network Level

## Use Templates custom post type to clean up the Database
The new addition `Template` is added to help cleaning up the Database. This option should be use only when the Theme Builder page is not loading. The reason is that there could be multiple instances of the same template saved in the database.

### How to clean the database
1. Open the Templates > All Templates
2. Order all CPT (custom post types) by name
3. Delete all duplicates except the most recent one

## Misc
If the WordPress installation is using Post Revisions, it is possible to use the WordPress Post Revisions on **Header Templates**, **Body Templates** and **Footer Templates** in order to revert changes that were done on those specific custom post types.


## Know compatiblity issues:

The plugin doesn't have support for multi language Websites. If 3rd party plugins such as:
- WPML
- Polylang
- or anyother language plugin

Are being used, to be able to access the new section from where the lost templates can be recovered, make sure that those plugins are deactivated first. Recover the tempaltes, and then activate back those translation plugins. 
