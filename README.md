# descending-on-first-click
Default WordPress Admin Column Headers to Descending Sort on First Click

By default in Wordpress, when you click on an admin column header it will sort the table by that column. However, it always defaults to ascending sort order-- which means if you want descending sort order, you have to click twice. On a slow site or if you're just antsy, this means waiting in vain. So this simple plugin helps. 

## Why this exists
We have a number of custom date fields, and we only ever sort to see what the most recent date is. This means we are always clicking twice to sort ascending then descending, in order to see what we want. 


## What it actually does
 1. When you load any admin page, a simple admin script [is enqueued](https://github.com/brandonjp/descending-on-first-click/blob/main/descending-on-first-click.php#L13-L20).
 2. [This very simple javascript](https://github.com/brandonjp/descending-on-first-click/blob/main/descending-on-first-click.js#L5-L13) looks for any tables with column headers that are sortable but not the currently sorted column. Then it replaces the sorting url so that, when clicked, the column is sorted in descending order. 
 3. After that, everything works as expected and you can still click to sort ascending and descending to your heart's content. 


## Plugin Options
There are no options. Activate the plugin to enable. Deactivate to disable. 
