<?php
/**
 * Front to the WordPress application. This file doesn't do anything, but loads
 * wp-blog-header.php which does and tells WordPress to load the theme.
 *
 * @package WordPress
 */

/**
 * Tells WordPress to load the WordPress theme and output it.
 *
 * @var bool
 */
define( 'WP_USE_THEMES', true );

?>

<form action="" id="postjob" method="post">
    <table>
        <tr>
            <td><label for="organizationname">Organization Name:</label></td>
            <td><input type="text" name="organizationname" id="organizationname" value="/></td>
        </tr>
        <tr>
            <td><label for="post">Post:</label></td>
            <td><input type="text" name="post" id="post" value="" /></td>
        </tr>
        <tr>
            <td><label for="publishfrom">Publish From:</label></td>
            <td><input type="text" name="publishfrom" id="publishfrom" /></td>
        </tr>
        <tr>
            <td><label for="publishupto">Publish Upto:</label></td>
            <td><input type="text" name="publishupto" id="publishupto" /></td>
        </tr>
        <tr>
            <td><label for="qualification">Qualification:</label></td>
            <td><input type="text" name="qualification1" id="qualification1" /></td>
            <td><input type="text" name="qualification2" id="qualification2" /></td>
            <td><input type="text" name="qualification3" id="qualification3" /></td>
            <td><input type="text" name="qualification4" id="qualification4" /></td>
        </tr>
        <tr>
            <td><label for="experience">Experience:</label></td>
            <td><input type="text" name="experience1" id="experience1"/></td>
            <td><input type="text" name="experience2" id="experience2"/></td>
            <td><input type="text" name="experience3" id="experience3"/></td>
        </tr>
        <tr>
            <td><label for="training">Training:</label></td>
            <td><input type="text" name="training1" id="training1" />></td>
            <td><input type="text" name="training2" id="training2" /></td>
            <td><input type="text" name="training3" id="training3" /></td>
            <td><input type="text" name="training4" id="training4" /></td>
            <td><input type="text" name="training5" id="training5" /></td>
        </tr>
        <tr>
            <td><button type="submit" name="submit">Submit</button></td>
        </tr>
    </table>
</form>

