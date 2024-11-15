<?php 
    if ( !defined( 'ABSPATH' ) ) {
        die;
    }
?>

<div id="pagination">
    <div class="previous" x-show="max_pages > 1">
        <a href="#" x-on:click.prevent="update_destinations(current_page === 1 ? 1 : current_page - 1)">
            <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M18.25 22.5L20 20.75L14.25 15L20 9.25L18.25 7.5L10.75 15L18.25 22.5Z" fill="#4F5655"/>
            </svg>                                
        </a>
    </div>
    <ul class="pages">
        <template x-for="(item, index) in max_pages" :key="index">
            <li x-bind:class="{'current' : item === current_page}">
                <a href="#" x-text="item" x-on:click.prevent="update_destinations(item)"></a>
            </li>
        </template>
    </ul>
    <select id="selection_pages" class="selection_pages" x-on:change="update_destinations($event.target.value)">
        <template x-for="(item, index) in max_pages" :key="index">
            <option x-bind:value="item" x-text="item"></option>
        </template>
    </select>
    <div class="next" x-show="max_pages > 1">
        <a href="#" x-on:click.prevent="update_destinations((current_page + 1) > max_pages ? max_pages : current_page + 1)">
            <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M11.75 22.5L10 20.75L15.75 15L10 9.25L11.75 7.5L19.25 15L11.75 22.5Z" fill="#4F5655"/>
            </svg>
        </a>
    </div>
</div>