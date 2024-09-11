<?php 
    if ( !defined( 'ABSPATH' ) ) {
        die;
    }
?>

<main>
    <?php get_template_part( 'template_parts/inner_page_banner' ); ?>
    <div id="content">
        <div class="wrap">
            <div class="sidebar" 
                x-data="destinations_sidebar"
                x-on:resize.window="on_window_resize">
                <div class="title">
                    <svg id="filters" width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg"
                        x-cloak
                        x-show="!open_filters"
                        @click="toggle_filters">
                        <path d="M21.3333 20C23.0747 20 24.5573 21.1133 25.1067 22.6667H26.6667C27.0203 22.6667 27.3594 22.8071 27.6095 23.0572C27.8595 23.3072 28 23.6464 28 24C28 24.3536 27.8595 24.6928 27.6095 24.9428C27.3594 25.1929 27.0203 25.3333 26.6667 25.3333H25.1067C24.8312 26.114 24.3203 26.7901 23.6445 27.2683C22.9687 27.7465 22.1612 28.0033 21.3333 28.0033C20.5054 28.0033 19.6979 27.7465 19.0221 27.2683C18.3463 26.7901 17.8355 26.114 17.56 25.3333H5.33333C4.97971 25.3333 4.64057 25.1929 4.39052 24.9428C4.14048 24.6928 4 24.3536 4 24C4 23.6464 4.14048 23.3072 4.39052 23.0572C4.64057 22.8071 4.97971 22.6667 5.33333 22.6667H17.56C17.8358 21.8865 18.3469 21.211 19.0227 20.7334C19.6985 20.2558 20.5058 19.9996 21.3333 20ZM10.6667 12C11.452 11.9999 12.22 12.231 12.8748 12.6644C13.5297 13.0978 14.0425 13.7144 14.3493 14.4373L14.4387 14.6667H26.6667C27.0065 14.667 27.3334 14.7972 27.5805 15.0305C27.8276 15.2638 27.9763 15.5826 27.9962 15.9219C28.0161 16.2611 27.9058 16.5952 27.6876 16.8558C27.4695 17.1164 27.1601 17.2839 26.8227 17.324L26.6667 17.3333H14.44C14.1712 18.0937 13.6789 18.7551 13.0276 19.2308C12.3764 19.7065 11.5966 19.9744 10.7905 19.9991C9.98436 20.0239 9.18956 19.8046 8.5103 19.3698C7.83104 18.935 7.29902 18.3051 6.984 17.5627L6.89333 17.3333H5.33333C4.99349 17.333 4.66662 17.2028 4.41951 16.9695C4.17239 16.7362 4.02369 16.4174 4.00377 16.0781C3.98385 15.7389 4.09423 15.4048 4.31235 15.1442C4.53047 14.8836 4.83987 14.7161 5.17733 14.676L5.33333 14.6667H6.89333C7.16918 13.8865 7.68022 13.211 8.35602 12.7334C9.03183 12.2558 9.83913 11.9996 10.6667 12ZM21.3333 4C23.0747 4 24.5573 5.11333 25.1067 6.66667H26.6667C27.0203 6.66667 27.3594 6.80714 27.6095 7.05719C27.8595 7.30724 28 7.64638 28 8C28 8.35362 27.8595 8.69276 27.6095 8.94281C27.3594 9.19286 27.0203 9.33333 26.6667 9.33333H25.1067C24.8312 10.114 24.3203 10.7901 23.6445 11.2683C22.9687 11.7465 22.1612 12.0033 21.3333 12.0033C20.5054 12.0033 19.6979 11.7465 19.0221 11.2683C18.3463 10.7901 17.8355 10.114 17.56 9.33333H5.33333C4.97971 9.33333 4.64057 9.19286 4.39052 8.94281C4.14048 8.69276 4 8.35362 4 8C4 7.64638 4.14048 7.30724 4.39052 7.05719C4.64057 6.80714 4.97971 6.66667 5.33333 6.66667H17.56C17.8358 5.88646 18.3469 5.21101 19.0227 4.73341C19.6985 4.25581 20.5058 3.99957 21.3333 4Z" fill="#2EC4B6"/>
                    </svg>
                    <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg"
                        x-cloak
                        x-show="open_filters"
                        @click="toggle_filters">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M16 18.8293L23.0707 25.9C23.4459 26.2752 23.9547 26.486 24.4853 26.486C25.0159 26.486 25.5248 26.2752 25.9 25.9C26.2752 25.5248 26.486 25.0159 26.486 24.4853C26.486 23.9547 26.2752 23.4459 25.9 23.0707L18.8267 16L25.8987 8.92933C26.0844 8.74355 26.2316 8.52302 26.3321 8.28032C26.4326 8.03763 26.4842 7.77752 26.4842 7.51486C26.4841 7.25219 26.4323 6.99211 26.3317 6.74946C26.2312 6.50681 26.0838 6.28635 25.898 6.10066C25.7122 5.91497 25.4917 5.76769 25.249 5.66723C25.0063 5.56677 24.7462 5.5151 24.4835 5.51516C24.2209 5.51522 23.9608 5.56702 23.7181 5.66759C23.4755 5.76817 23.255 5.91555 23.0693 6.10133L16 13.172L8.92933 6.10133C8.74493 5.91022 8.52431 5.75776 8.28035 5.65282C8.0364 5.54789 7.77398 5.4926 7.50843 5.49017C7.24287 5.48773 6.97949 5.53821 6.73365 5.63866C6.48781 5.7391 6.26444 5.88751 6.07657 6.0752C5.88869 6.2629 5.74008 6.48613 5.6394 6.73188C5.53873 6.97762 5.488 7.24095 5.49018 7.50651C5.49236 7.77207 5.54741 8.03453 5.65211 8.27859C5.75681 8.52265 5.90907 8.74341 6.1 8.92799L13.1733 16L6.10133 23.072C5.9104 23.2566 5.75815 23.4773 5.65344 23.7214C5.54874 23.9655 5.49369 24.2279 5.49151 24.4935C5.48933 24.759 5.54006 25.0224 5.64074 25.2681C5.74141 25.5139 5.89003 25.7371 6.0779 25.9248C6.26577 26.1125 6.48914 26.2609 6.73498 26.3613C6.98082 26.4618 7.2442 26.5123 7.50976 26.5098C7.77532 26.5074 8.03773 26.4521 8.28169 26.3472C8.52565 26.2422 8.74626 26.0898 8.93067 25.8987L16 18.8293Z" fill="#2EC4B6"/>
                    </svg>
                    <p>Filter</p>
                </div>
                <div class="filters" x-cloak x-show="open_filters">
                    <div class="filter range">
                        <p class="label">Price:</p>
                        <input type="range" min="1" max="150000000">
                        <p class="value">$5000</p>
                    </div>
                    <div class="filter range">
                        <p class="label">Duration:</p>
                        <input type="range" min="1" max="20">
                        <p class="value">10 Days</p>
                    </div>
                    <div class="filter checkboxes">
                        <p class="label">Destinations:</p>
                        <div class="checkbox_selector">
                            <input type="checkbox" value="">
                            <label>Europe Tours</label>
                        </div>
                        <div class="checkbox_selector">
                            <input type="checkbox" value="">
                            <label>Australia Tours</label>
                        </div>
                        <div class="checkbox_selector">
                            <input type="checkbox" value="">
                            <label>USA Tours</label>
                        </div>
                        <div class="checkbox_selector">
                            <input type="checkbox" value="">
                            <label>UK Tours</label>
                        </div>
                        <div class="checkbox_selector">
                            <input type="checkbox" value="">
                            <label>Japan Tours</label>
                        </div>
                    </div>
                    <div class="filter checkboxes">
                        <p class="label">Activities:</p>
                        <div class="checkbox_selector">
                            <input type="checkbox" value="">
                            <label>Adventure Tours</label>
                        </div>
                        <div class="checkbox_selector">
                            <input type="checkbox" value="">
                            <label>Culture Trips</label>
                        </div>
                        <div class="checkbox_selector">
                            <input type="checkbox" value="">
                            <label>Family Vacations</label>
                        </div>
                        <div class="checkbox_selector">
                            <input type="checkbox" value="">
                            <label>Holiday Vacations</label>
                        </div>
                        <div class="checkbox_selector">
                            <input type="checkbox" value="">
                            <label>Ocean Cruise</label>
                        </div>
                        <div class="checkbox_selector">
                            <input type="checkbox" value="">
                            <label>Religious Pilgrimage Tours</label>
                        </div>
                        <div class="checkbox_selector">
                            <input type="checkbox" value="">
                            <label>River Cruise</label>
                        </div>
                    </div>
                    <div class="filter checkboxes">
                        <p class="label">Trip Types:</p>
                        <div class="checkbox_selector">
                            <input type="checkbox" value="">
                            <label>All In Tour Packages</label>
                        </div>
                        <div class="checkbox_selector">
                            <input type="checkbox" value="">
                            <label>Fixed Departure Tours</label>
                        </div>
                        <div class="checkbox_selector">
                            <input type="checkbox" value="">
                            <label>Group Tours</label>
                        </div>
                        <div class="checkbox_selector">
                            <input type="checkbox" value="">
                            <label>Land Arrangements Tour</label>
                        </div>
                    </div>
                    <div class="filter checkboxes">
                        <p class="label">Tags:</p>
                        <div class="checkbox_selector">
                            <input type="checkbox" value="">
                            <label>Australia Southern Capitals Tour</label>
                        </div>
                        <div class="checkbox_selector">
                            <input type="checkbox" value="">
                            <label>Korea Tour</label>
                        </div>
                        <div class="checkbox_selector">
                            <input type="checkbox" value="">
                            <label>Japan Tour</label>
                        </div>
                        <div class="checkbox_selector">
                            <input type="checkbox" value="">
                            <label>Hong Kong Tour</label>
                        </div>
                    </div>
                </div>
                <div class="actions" x-cloak x-show="open_filters">
                    <a href="#" class="apply_filters button">
                        <span>Apply Filters</span>
                    </a>
                    <a href="#" class="reset_filters button">
                        <span>Reset Filters</span>
                    </a>
                </div>
            </div>

            <div id="destinations_posts_wrap">
                <div id="destinations_posts">
                    <div class="destination">
                        <div class="img">
                            <div class="view_trip_wrap">
                                <a href="#" class="view_trip button">
                                    <span>View trip</span>
                                </a>
                            </div>
                        </div>
                        <div class="destinations_details">
                            <p class="destination_title">Eiffel Tower</p>
                            <p class="destination_excerpt">
                                Nulla quis mi mattis, luctus massa id, lobortis sapien. Duis hendrerit feugiat lorem et ullamcorper. Nullam ut lectus augue. Praesent tempus feugiat eros tempor iaculis.
                            </p>
                            <div class="details">
                                <div class="location">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M11.778 10.7778H11.788V10.7878H11.778V10.7778Z" stroke="#FF9F1C" stroke-width="3.75" stroke-linejoin="round"/>
                                        <path d="M11.778 21.7778L17.278 16.2778C18.3657 15.19 19.1065 13.8041 19.4066 12.2953C19.7067 10.7865 19.5526 9.22263 18.9639 7.80141C18.3752 6.38018 17.3783 5.16545 16.0992 4.31081C14.8201 3.45616 13.3163 3 11.778 3C10.2397 3 8.73589 3.45616 7.45681 4.31081C6.17774 5.16545 5.18081 6.38018 4.5921 7.80141C4.00339 9.22263 3.84934 10.7865 4.14943 12.2953C4.44952 13.8041 5.19027 15.19 6.278 16.2778L11.778 21.7778Z" stroke="#FF9F1C" stroke-width="2.5" stroke-linejoin="round"/>
                                    </svg>
                                    <span>Paris, France</span>
                                </div>
                                <div class="duration">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12 2C17.523 2 22 6.477 22 12C22 17.523 17.523 22 12 22C6.477 22 2 17.523 2 12C2 6.477 6.477 2 12 2ZM12 4C9.87827 4 7.84344 4.84285 6.34315 6.34315C4.84285 7.84344 4 9.87827 4 12C4 14.1217 4.84285 16.1566 6.34315 17.6569C7.84344 19.1571 9.87827 20 12 20C14.1217 20 16.1566 19.1571 17.6569 17.6569C19.1571 16.1566 20 14.1217 20 12C20 9.87827 19.1571 7.84344 17.6569 6.34315C16.1566 4.84285 14.1217 4 12 4ZM12 6C12.2449 6.00003 12.4813 6.08996 12.6644 6.25272C12.8474 6.41547 12.9643 6.63975 12.993 6.883L13 7V11.586L15.707 14.293C15.8863 14.473 15.9905 14.7144 15.9982 14.9684C16.006 15.2223 15.9168 15.4697 15.7488 15.6603C15.5807 15.8508 15.3464 15.9703 15.0935 15.9944C14.8406 16.0185 14.588 15.9454 14.387 15.79L14.293 15.707L11.293 12.707C11.1376 12.5514 11.0378 12.349 11.009 12.131L11 12V7C11 6.73478 11.1054 6.48043 11.2929 6.29289C11.4804 6.10536 11.7348 6 12 6Z" fill="#FF9F1C"/>
                                    </svg>
                                    <span>6 Days</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="destination">
                        <div class="img">
                            <div class="view_trip_wrap">
                                <a href="#" class="view_trip button">
                                    <span>View trip</span>
                                </a>
                            </div>
                        </div>
                        <div class="destinations_details">
                            <p class="destination_title">Eiffel Tower</p>
                            <p class="destination_excerpt">
                                Nulla quis mi mattis, luctus massa id, lobortis sapien. Duis hendrerit feugiat lorem et ullamcorper. Nullam ut lectus augue. Praesent tempus feugiat eros tempor iaculis.
                            </p>
                            <div class="details">
                                <div class="location">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M11.778 10.7778H11.788V10.7878H11.778V10.7778Z" stroke="#FF9F1C" stroke-width="3.75" stroke-linejoin="round"/>
                                        <path d="M11.778 21.7778L17.278 16.2778C18.3657 15.19 19.1065 13.8041 19.4066 12.2953C19.7067 10.7865 19.5526 9.22263 18.9639 7.80141C18.3752 6.38018 17.3783 5.16545 16.0992 4.31081C14.8201 3.45616 13.3163 3 11.778 3C10.2397 3 8.73589 3.45616 7.45681 4.31081C6.17774 5.16545 5.18081 6.38018 4.5921 7.80141C4.00339 9.22263 3.84934 10.7865 4.14943 12.2953C4.44952 13.8041 5.19027 15.19 6.278 16.2778L11.778 21.7778Z" stroke="#FF9F1C" stroke-width="2.5" stroke-linejoin="round"/>
                                    </svg>
                                    <span>Paris, France</span>
                                </div>
                                <div class="duration">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12 2C17.523 2 22 6.477 22 12C22 17.523 17.523 22 12 22C6.477 22 2 17.523 2 12C2 6.477 6.477 2 12 2ZM12 4C9.87827 4 7.84344 4.84285 6.34315 6.34315C4.84285 7.84344 4 9.87827 4 12C4 14.1217 4.84285 16.1566 6.34315 17.6569C7.84344 19.1571 9.87827 20 12 20C14.1217 20 16.1566 19.1571 17.6569 17.6569C19.1571 16.1566 20 14.1217 20 12C20 9.87827 19.1571 7.84344 17.6569 6.34315C16.1566 4.84285 14.1217 4 12 4ZM12 6C12.2449 6.00003 12.4813 6.08996 12.6644 6.25272C12.8474 6.41547 12.9643 6.63975 12.993 6.883L13 7V11.586L15.707 14.293C15.8863 14.473 15.9905 14.7144 15.9982 14.9684C16.006 15.2223 15.9168 15.4697 15.7488 15.6603C15.5807 15.8508 15.3464 15.9703 15.0935 15.9944C14.8406 16.0185 14.588 15.9454 14.387 15.79L14.293 15.707L11.293 12.707C11.1376 12.5514 11.0378 12.349 11.009 12.131L11 12V7C11 6.73478 11.1054 6.48043 11.2929 6.29289C11.4804 6.10536 11.7348 6 12 6Z" fill="#FF9F1C"/>
                                    </svg>
                                    <span>6 Days</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="destination">
                        <div class="img">
                            <div class="view_trip_wrap">
                                <a href="#" class="view_trip button">
                                    <span>View trip</span>
                                </a>
                            </div>
                        </div>
                        <div class="destinations_details">
                            <p class="destination_title">Eiffel Tower</p>
                            <p class="destination_excerpt">
                                Nulla quis mi mattis, luctus massa id, lobortis sapien. Duis hendrerit feugiat lorem et ullamcorper. Nullam ut lectus augue. Praesent tempus feugiat eros tempor iaculis.
                            </p>
                            <div class="details">
                                <div class="location">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M11.778 10.7778H11.788V10.7878H11.778V10.7778Z" stroke="#FF9F1C" stroke-width="3.75" stroke-linejoin="round"/>
                                        <path d="M11.778 21.7778L17.278 16.2778C18.3657 15.19 19.1065 13.8041 19.4066 12.2953C19.7067 10.7865 19.5526 9.22263 18.9639 7.80141C18.3752 6.38018 17.3783 5.16545 16.0992 4.31081C14.8201 3.45616 13.3163 3 11.778 3C10.2397 3 8.73589 3.45616 7.45681 4.31081C6.17774 5.16545 5.18081 6.38018 4.5921 7.80141C4.00339 9.22263 3.84934 10.7865 4.14943 12.2953C4.44952 13.8041 5.19027 15.19 6.278 16.2778L11.778 21.7778Z" stroke="#FF9F1C" stroke-width="2.5" stroke-linejoin="round"/>
                                    </svg>
                                    <span>Paris, France</span>
                                </div>
                                <div class="duration">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12 2C17.523 2 22 6.477 22 12C22 17.523 17.523 22 12 22C6.477 22 2 17.523 2 12C2 6.477 6.477 2 12 2ZM12 4C9.87827 4 7.84344 4.84285 6.34315 6.34315C4.84285 7.84344 4 9.87827 4 12C4 14.1217 4.84285 16.1566 6.34315 17.6569C7.84344 19.1571 9.87827 20 12 20C14.1217 20 16.1566 19.1571 17.6569 17.6569C19.1571 16.1566 20 14.1217 20 12C20 9.87827 19.1571 7.84344 17.6569 6.34315C16.1566 4.84285 14.1217 4 12 4ZM12 6C12.2449 6.00003 12.4813 6.08996 12.6644 6.25272C12.8474 6.41547 12.9643 6.63975 12.993 6.883L13 7V11.586L15.707 14.293C15.8863 14.473 15.9905 14.7144 15.9982 14.9684C16.006 15.2223 15.9168 15.4697 15.7488 15.6603C15.5807 15.8508 15.3464 15.9703 15.0935 15.9944C14.8406 16.0185 14.588 15.9454 14.387 15.79L14.293 15.707L11.293 12.707C11.1376 12.5514 11.0378 12.349 11.009 12.131L11 12V7C11 6.73478 11.1054 6.48043 11.2929 6.29289C11.4804 6.10536 11.7348 6 12 6Z" fill="#FF9F1C"/>
                                    </svg>
                                    <span>6 Days</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="destination">
                        <div class="img">
                            <div class="view_trip_wrap">
                                <a href="#" class="view_trip button">
                                    <span>View trip</span>
                                </a>
                            </div>
                        </div>
                        <div class="destinations_details">
                            <p class="destination_title">Eiffel Tower</p>
                            <p class="destination_excerpt">
                                Nulla quis mi mattis, luctus massa id, lobortis sapien. Duis hendrerit feugiat lorem et ullamcorper. Nullam ut lectus augue. Praesent tempus feugiat eros tempor iaculis.
                            </p>
                            <div class="details">
                                <div class="location">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M11.778 10.7778H11.788V10.7878H11.778V10.7778Z" stroke="#FF9F1C" stroke-width="3.75" stroke-linejoin="round"/>
                                        <path d="M11.778 21.7778L17.278 16.2778C18.3657 15.19 19.1065 13.8041 19.4066 12.2953C19.7067 10.7865 19.5526 9.22263 18.9639 7.80141C18.3752 6.38018 17.3783 5.16545 16.0992 4.31081C14.8201 3.45616 13.3163 3 11.778 3C10.2397 3 8.73589 3.45616 7.45681 4.31081C6.17774 5.16545 5.18081 6.38018 4.5921 7.80141C4.00339 9.22263 3.84934 10.7865 4.14943 12.2953C4.44952 13.8041 5.19027 15.19 6.278 16.2778L11.778 21.7778Z" stroke="#FF9F1C" stroke-width="2.5" stroke-linejoin="round"/>
                                    </svg>
                                    <span>Paris, France</span>
                                </div>
                                <div class="duration">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12 2C17.523 2 22 6.477 22 12C22 17.523 17.523 22 12 22C6.477 22 2 17.523 2 12C2 6.477 6.477 2 12 2ZM12 4C9.87827 4 7.84344 4.84285 6.34315 6.34315C4.84285 7.84344 4 9.87827 4 12C4 14.1217 4.84285 16.1566 6.34315 17.6569C7.84344 19.1571 9.87827 20 12 20C14.1217 20 16.1566 19.1571 17.6569 17.6569C19.1571 16.1566 20 14.1217 20 12C20 9.87827 19.1571 7.84344 17.6569 6.34315C16.1566 4.84285 14.1217 4 12 4ZM12 6C12.2449 6.00003 12.4813 6.08996 12.6644 6.25272C12.8474 6.41547 12.9643 6.63975 12.993 6.883L13 7V11.586L15.707 14.293C15.8863 14.473 15.9905 14.7144 15.9982 14.9684C16.006 15.2223 15.9168 15.4697 15.7488 15.6603C15.5807 15.8508 15.3464 15.9703 15.0935 15.9944C14.8406 16.0185 14.588 15.9454 14.387 15.79L14.293 15.707L11.293 12.707C11.1376 12.5514 11.0378 12.349 11.009 12.131L11 12V7C11 6.73478 11.1054 6.48043 11.2929 6.29289C11.4804 6.10536 11.7348 6 12 6Z" fill="#FF9F1C"/>
                                    </svg>
                                    <span>6 Days</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="destination">
                        <div class="img">
                            <div class="view_trip_wrap">
                                <a href="#" class="view_trip button">
                                    <span>View trip</span>
                                </a>
                            </div>
                        </div>
                        <div class="destinations_details">
                            <p class="destination_title">Eiffel Tower</p>
                            <p class="destination_excerpt">
                                Nulla quis mi mattis, luctus massa id, lobortis sapien. Duis hendrerit feugiat lorem et ullamcorper. Nullam ut lectus augue. Praesent tempus feugiat eros tempor iaculis.
                            </p>
                            <div class="details">
                                <div class="location">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M11.778 10.7778H11.788V10.7878H11.778V10.7778Z" stroke="#FF9F1C" stroke-width="3.75" stroke-linejoin="round"/>
                                        <path d="M11.778 21.7778L17.278 16.2778C18.3657 15.19 19.1065 13.8041 19.4066 12.2953C19.7067 10.7865 19.5526 9.22263 18.9639 7.80141C18.3752 6.38018 17.3783 5.16545 16.0992 4.31081C14.8201 3.45616 13.3163 3 11.778 3C10.2397 3 8.73589 3.45616 7.45681 4.31081C6.17774 5.16545 5.18081 6.38018 4.5921 7.80141C4.00339 9.22263 3.84934 10.7865 4.14943 12.2953C4.44952 13.8041 5.19027 15.19 6.278 16.2778L11.778 21.7778Z" stroke="#FF9F1C" stroke-width="2.5" stroke-linejoin="round"/>
                                    </svg>
                                    <span>Paris, France</span>
                                </div>
                                <div class="duration">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12 2C17.523 2 22 6.477 22 12C22 17.523 17.523 22 12 22C6.477 22 2 17.523 2 12C2 6.477 6.477 2 12 2ZM12 4C9.87827 4 7.84344 4.84285 6.34315 6.34315C4.84285 7.84344 4 9.87827 4 12C4 14.1217 4.84285 16.1566 6.34315 17.6569C7.84344 19.1571 9.87827 20 12 20C14.1217 20 16.1566 19.1571 17.6569 17.6569C19.1571 16.1566 20 14.1217 20 12C20 9.87827 19.1571 7.84344 17.6569 6.34315C16.1566 4.84285 14.1217 4 12 4ZM12 6C12.2449 6.00003 12.4813 6.08996 12.6644 6.25272C12.8474 6.41547 12.9643 6.63975 12.993 6.883L13 7V11.586L15.707 14.293C15.8863 14.473 15.9905 14.7144 15.9982 14.9684C16.006 15.2223 15.9168 15.4697 15.7488 15.6603C15.5807 15.8508 15.3464 15.9703 15.0935 15.9944C14.8406 16.0185 14.588 15.9454 14.387 15.79L14.293 15.707L11.293 12.707C11.1376 12.5514 11.0378 12.349 11.009 12.131L11 12V7C11 6.73478 11.1054 6.48043 11.2929 6.29289C11.4804 6.10536 11.7348 6 12 6Z" fill="#FF9F1C"/>
                                    </svg>
                                    <span>6 Days</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="destination">
                        <div class="img">
                            <div class="view_trip_wrap">
                                <a href="#" class="view_trip button">
                                    <span>View trip</span>
                                </a>
                            </div>
                        </div>
                        <div class="destinations_details">
                            <p class="destination_title">Eiffel Tower</p>
                            <p class="destination_excerpt">
                                Nulla quis mi mattis, luctus massa id, lobortis sapien. Duis hendrerit feugiat lorem et ullamcorper. Nullam ut lectus augue. Praesent tempus feugiat eros tempor iaculis.
                            </p>
                            <div class="details">
                                <div class="location">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M11.778 10.7778H11.788V10.7878H11.778V10.7778Z" stroke="#FF9F1C" stroke-width="3.75" stroke-linejoin="round"/>
                                        <path d="M11.778 21.7778L17.278 16.2778C18.3657 15.19 19.1065 13.8041 19.4066 12.2953C19.7067 10.7865 19.5526 9.22263 18.9639 7.80141C18.3752 6.38018 17.3783 5.16545 16.0992 4.31081C14.8201 3.45616 13.3163 3 11.778 3C10.2397 3 8.73589 3.45616 7.45681 4.31081C6.17774 5.16545 5.18081 6.38018 4.5921 7.80141C4.00339 9.22263 3.84934 10.7865 4.14943 12.2953C4.44952 13.8041 5.19027 15.19 6.278 16.2778L11.778 21.7778Z" stroke="#FF9F1C" stroke-width="2.5" stroke-linejoin="round"/>
                                    </svg>
                                    <span>Paris, France</span>
                                </div>
                                <div class="duration">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12 2C17.523 2 22 6.477 22 12C22 17.523 17.523 22 12 22C6.477 22 2 17.523 2 12C2 6.477 6.477 2 12 2ZM12 4C9.87827 4 7.84344 4.84285 6.34315 6.34315C4.84285 7.84344 4 9.87827 4 12C4 14.1217 4.84285 16.1566 6.34315 17.6569C7.84344 19.1571 9.87827 20 12 20C14.1217 20 16.1566 19.1571 17.6569 17.6569C19.1571 16.1566 20 14.1217 20 12C20 9.87827 19.1571 7.84344 17.6569 6.34315C16.1566 4.84285 14.1217 4 12 4ZM12 6C12.2449 6.00003 12.4813 6.08996 12.6644 6.25272C12.8474 6.41547 12.9643 6.63975 12.993 6.883L13 7V11.586L15.707 14.293C15.8863 14.473 15.9905 14.7144 15.9982 14.9684C16.006 15.2223 15.9168 15.4697 15.7488 15.6603C15.5807 15.8508 15.3464 15.9703 15.0935 15.9944C14.8406 16.0185 14.588 15.9454 14.387 15.79L14.293 15.707L11.293 12.707C11.1376 12.5514 11.0378 12.349 11.009 12.131L11 12V7C11 6.73478 11.1054 6.48043 11.2929 6.29289C11.4804 6.10536 11.7348 6 12 6Z" fill="#FF9F1C"/>
                                    </svg>
                                    <span>6 Days</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="destination">
                        <div class="img">
                            <div class="view_trip_wrap">
                                <a href="#" class="view_trip button">
                                    <span>View trip</span>
                                </a>
                            </div>
                        </div>
                        <div class="destinations_details">
                            <p class="destination_title">Eiffel Tower</p>
                            <p class="destination_excerpt">
                                Nulla quis mi mattis, luctus massa id, lobortis sapien. Duis hendrerit feugiat lorem et ullamcorper. Nullam ut lectus augue. Praesent tempus feugiat eros tempor iaculis.
                            </p>
                            <div class="details">
                                <div class="location">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M11.778 10.7778H11.788V10.7878H11.778V10.7778Z" stroke="#FF9F1C" stroke-width="3.75" stroke-linejoin="round"/>
                                        <path d="M11.778 21.7778L17.278 16.2778C18.3657 15.19 19.1065 13.8041 19.4066 12.2953C19.7067 10.7865 19.5526 9.22263 18.9639 7.80141C18.3752 6.38018 17.3783 5.16545 16.0992 4.31081C14.8201 3.45616 13.3163 3 11.778 3C10.2397 3 8.73589 3.45616 7.45681 4.31081C6.17774 5.16545 5.18081 6.38018 4.5921 7.80141C4.00339 9.22263 3.84934 10.7865 4.14943 12.2953C4.44952 13.8041 5.19027 15.19 6.278 16.2778L11.778 21.7778Z" stroke="#FF9F1C" stroke-width="2.5" stroke-linejoin="round"/>
                                    </svg>
                                    <span>Paris, France</span>
                                </div>
                                <div class="duration">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12 2C17.523 2 22 6.477 22 12C22 17.523 17.523 22 12 22C6.477 22 2 17.523 2 12C2 6.477 6.477 2 12 2ZM12 4C9.87827 4 7.84344 4.84285 6.34315 6.34315C4.84285 7.84344 4 9.87827 4 12C4 14.1217 4.84285 16.1566 6.34315 17.6569C7.84344 19.1571 9.87827 20 12 20C14.1217 20 16.1566 19.1571 17.6569 17.6569C19.1571 16.1566 20 14.1217 20 12C20 9.87827 19.1571 7.84344 17.6569 6.34315C16.1566 4.84285 14.1217 4 12 4ZM12 6C12.2449 6.00003 12.4813 6.08996 12.6644 6.25272C12.8474 6.41547 12.9643 6.63975 12.993 6.883L13 7V11.586L15.707 14.293C15.8863 14.473 15.9905 14.7144 15.9982 14.9684C16.006 15.2223 15.9168 15.4697 15.7488 15.6603C15.5807 15.8508 15.3464 15.9703 15.0935 15.9944C14.8406 16.0185 14.588 15.9454 14.387 15.79L14.293 15.707L11.293 12.707C11.1376 12.5514 11.0378 12.349 11.009 12.131L11 12V7C11 6.73478 11.1054 6.48043 11.2929 6.29289C11.4804 6.10536 11.7348 6 12 6Z" fill="#FF9F1C"/>
                                    </svg>
                                    <span>6 Days</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="destination">
                        <div class="img">
                            <div class="view_trip_wrap">
                                <a href="#" class="view_trip button">
                                    <span>View trip</span>
                                </a>
                            </div>
                        </div>
                        <div class="destinations_details">
                            <p class="destination_title">Eiffel Tower</p>
                            <p class="destination_excerpt">
                                Nulla quis mi mattis, luctus massa id, lobortis sapien. Duis hendrerit feugiat lorem et ullamcorper. Nullam ut lectus augue. Praesent tempus feugiat eros tempor iaculis.
                            </p>
                            <div class="details">
                                <div class="location">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M11.778 10.7778H11.788V10.7878H11.778V10.7778Z" stroke="#FF9F1C" stroke-width="3.75" stroke-linejoin="round"/>
                                        <path d="M11.778 21.7778L17.278 16.2778C18.3657 15.19 19.1065 13.8041 19.4066 12.2953C19.7067 10.7865 19.5526 9.22263 18.9639 7.80141C18.3752 6.38018 17.3783 5.16545 16.0992 4.31081C14.8201 3.45616 13.3163 3 11.778 3C10.2397 3 8.73589 3.45616 7.45681 4.31081C6.17774 5.16545 5.18081 6.38018 4.5921 7.80141C4.00339 9.22263 3.84934 10.7865 4.14943 12.2953C4.44952 13.8041 5.19027 15.19 6.278 16.2778L11.778 21.7778Z" stroke="#FF9F1C" stroke-width="2.5" stroke-linejoin="round"/>
                                    </svg>
                                    <span>Paris, France</span>
                                </div>
                                <div class="duration">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12 2C17.523 2 22 6.477 22 12C22 17.523 17.523 22 12 22C6.477 22 2 17.523 2 12C2 6.477 6.477 2 12 2ZM12 4C9.87827 4 7.84344 4.84285 6.34315 6.34315C4.84285 7.84344 4 9.87827 4 12C4 14.1217 4.84285 16.1566 6.34315 17.6569C7.84344 19.1571 9.87827 20 12 20C14.1217 20 16.1566 19.1571 17.6569 17.6569C19.1571 16.1566 20 14.1217 20 12C20 9.87827 19.1571 7.84344 17.6569 6.34315C16.1566 4.84285 14.1217 4 12 4ZM12 6C12.2449 6.00003 12.4813 6.08996 12.6644 6.25272C12.8474 6.41547 12.9643 6.63975 12.993 6.883L13 7V11.586L15.707 14.293C15.8863 14.473 15.9905 14.7144 15.9982 14.9684C16.006 15.2223 15.9168 15.4697 15.7488 15.6603C15.5807 15.8508 15.3464 15.9703 15.0935 15.9944C14.8406 16.0185 14.588 15.9454 14.387 15.79L14.293 15.707L11.293 12.707C11.1376 12.5514 11.0378 12.349 11.009 12.131L11 12V7C11 6.73478 11.1054 6.48043 11.2929 6.29289C11.4804 6.10536 11.7348 6 12 6Z" fill="#FF9F1C"/>
                                    </svg>
                                    <span>6 Days</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="destination">
                        <div class="img">
                            <div class="view_trip_wrap">
                                <a href="#" class="view_trip button">
                                    <span>View trip</span>
                                </a>
                            </div>
                        </div>
                        <div class="destinations_details">
                            <p class="destination_title">Eiffel Tower</p>
                            <p class="destination_excerpt">
                                Nulla quis mi mattis, luctus massa id, lobortis sapien. Duis hendrerit feugiat lorem et ullamcorper. Nullam ut lectus augue. Praesent tempus feugiat eros tempor iaculis.
                            </p>
                            <div class="details">
                                <div class="location">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M11.778 10.7778H11.788V10.7878H11.778V10.7778Z" stroke="#FF9F1C" stroke-width="3.75" stroke-linejoin="round"/>
                                        <path d="M11.778 21.7778L17.278 16.2778C18.3657 15.19 19.1065 13.8041 19.4066 12.2953C19.7067 10.7865 19.5526 9.22263 18.9639 7.80141C18.3752 6.38018 17.3783 5.16545 16.0992 4.31081C14.8201 3.45616 13.3163 3 11.778 3C10.2397 3 8.73589 3.45616 7.45681 4.31081C6.17774 5.16545 5.18081 6.38018 4.5921 7.80141C4.00339 9.22263 3.84934 10.7865 4.14943 12.2953C4.44952 13.8041 5.19027 15.19 6.278 16.2778L11.778 21.7778Z" stroke="#FF9F1C" stroke-width="2.5" stroke-linejoin="round"/>
                                    </svg>
                                    <span>Paris, France</span>
                                </div>
                                <div class="duration">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12 2C17.523 2 22 6.477 22 12C22 17.523 17.523 22 12 22C6.477 22 2 17.523 2 12C2 6.477 6.477 2 12 2ZM12 4C9.87827 4 7.84344 4.84285 6.34315 6.34315C4.84285 7.84344 4 9.87827 4 12C4 14.1217 4.84285 16.1566 6.34315 17.6569C7.84344 19.1571 9.87827 20 12 20C14.1217 20 16.1566 19.1571 17.6569 17.6569C19.1571 16.1566 20 14.1217 20 12C20 9.87827 19.1571 7.84344 17.6569 6.34315C16.1566 4.84285 14.1217 4 12 4ZM12 6C12.2449 6.00003 12.4813 6.08996 12.6644 6.25272C12.8474 6.41547 12.9643 6.63975 12.993 6.883L13 7V11.586L15.707 14.293C15.8863 14.473 15.9905 14.7144 15.9982 14.9684C16.006 15.2223 15.9168 15.4697 15.7488 15.6603C15.5807 15.8508 15.3464 15.9703 15.0935 15.9944C14.8406 16.0185 14.588 15.9454 14.387 15.79L14.293 15.707L11.293 12.707C11.1376 12.5514 11.0378 12.349 11.009 12.131L11 12V7C11 6.73478 11.1054 6.48043 11.2929 6.29289C11.4804 6.10536 11.7348 6 12 6Z" fill="#FF9F1C"/>
                                    </svg>
                                    <span>6 Days</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="destination">
                        <div class="img">
                            <div class="view_trip_wrap">
                                <a href="#" class="view_trip button">
                                    <span>View trip</span>
                                </a>
                            </div>
                        </div>
                        <div class="destinations_details">
                            <p class="destination_title">Eiffel Tower</p>
                            <p class="destination_excerpt">
                                Nulla quis mi mattis, luctus massa id, lobortis sapien. Duis hendrerit feugiat lorem et ullamcorper. Nullam ut lectus augue. Praesent tempus feugiat eros tempor iaculis.
                            </p>
                            <div class="details">
                                <div class="location">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M11.778 10.7778H11.788V10.7878H11.778V10.7778Z" stroke="#FF9F1C" stroke-width="3.75" stroke-linejoin="round"/>
                                        <path d="M11.778 21.7778L17.278 16.2778C18.3657 15.19 19.1065 13.8041 19.4066 12.2953C19.7067 10.7865 19.5526 9.22263 18.9639 7.80141C18.3752 6.38018 17.3783 5.16545 16.0992 4.31081C14.8201 3.45616 13.3163 3 11.778 3C10.2397 3 8.73589 3.45616 7.45681 4.31081C6.17774 5.16545 5.18081 6.38018 4.5921 7.80141C4.00339 9.22263 3.84934 10.7865 4.14943 12.2953C4.44952 13.8041 5.19027 15.19 6.278 16.2778L11.778 21.7778Z" stroke="#FF9F1C" stroke-width="2.5" stroke-linejoin="round"/>
                                    </svg>
                                    <span>Paris, France</span>
                                </div>
                                <div class="duration">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12 2C17.523 2 22 6.477 22 12C22 17.523 17.523 22 12 22C6.477 22 2 17.523 2 12C2 6.477 6.477 2 12 2ZM12 4C9.87827 4 7.84344 4.84285 6.34315 6.34315C4.84285 7.84344 4 9.87827 4 12C4 14.1217 4.84285 16.1566 6.34315 17.6569C7.84344 19.1571 9.87827 20 12 20C14.1217 20 16.1566 19.1571 17.6569 17.6569C19.1571 16.1566 20 14.1217 20 12C20 9.87827 19.1571 7.84344 17.6569 6.34315C16.1566 4.84285 14.1217 4 12 4ZM12 6C12.2449 6.00003 12.4813 6.08996 12.6644 6.25272C12.8474 6.41547 12.9643 6.63975 12.993 6.883L13 7V11.586L15.707 14.293C15.8863 14.473 15.9905 14.7144 15.9982 14.9684C16.006 15.2223 15.9168 15.4697 15.7488 15.6603C15.5807 15.8508 15.3464 15.9703 15.0935 15.9944C14.8406 16.0185 14.588 15.9454 14.387 15.79L14.293 15.707L11.293 12.707C11.1376 12.5514 11.0378 12.349 11.009 12.131L11 12V7C11 6.73478 11.1054 6.48043 11.2929 6.29289C11.4804 6.10536 11.7348 6 12 6Z" fill="#FF9F1C"/>
                                    </svg>
                                    <span>6 Days</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="destination">
                        <div class="img">
                            <div class="view_trip_wrap">
                                <a href="#" class="view_trip button">
                                    <span>View trip</span>
                                </a>
                            </div>
                        </div>
                        <div class="destinations_details">
                            <p class="destination_title">Eiffel Tower</p>
                            <p class="destination_excerpt">
                                Nulla quis mi mattis, luctus massa id, lobortis sapien. Duis hendrerit feugiat lorem et ullamcorper. Nullam ut lectus augue. Praesent tempus feugiat eros tempor iaculis.
                            </p>
                            <div class="details">
                                <div class="location">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M11.778 10.7778H11.788V10.7878H11.778V10.7778Z" stroke="#FF9F1C" stroke-width="3.75" stroke-linejoin="round"/>
                                        <path d="M11.778 21.7778L17.278 16.2778C18.3657 15.19 19.1065 13.8041 19.4066 12.2953C19.7067 10.7865 19.5526 9.22263 18.9639 7.80141C18.3752 6.38018 17.3783 5.16545 16.0992 4.31081C14.8201 3.45616 13.3163 3 11.778 3C10.2397 3 8.73589 3.45616 7.45681 4.31081C6.17774 5.16545 5.18081 6.38018 4.5921 7.80141C4.00339 9.22263 3.84934 10.7865 4.14943 12.2953C4.44952 13.8041 5.19027 15.19 6.278 16.2778L11.778 21.7778Z" stroke="#FF9F1C" stroke-width="2.5" stroke-linejoin="round"/>
                                    </svg>
                                    <span>Paris, France</span>
                                </div>
                                <div class="duration">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12 2C17.523 2 22 6.477 22 12C22 17.523 17.523 22 12 22C6.477 22 2 17.523 2 12C2 6.477 6.477 2 12 2ZM12 4C9.87827 4 7.84344 4.84285 6.34315 6.34315C4.84285 7.84344 4 9.87827 4 12C4 14.1217 4.84285 16.1566 6.34315 17.6569C7.84344 19.1571 9.87827 20 12 20C14.1217 20 16.1566 19.1571 17.6569 17.6569C19.1571 16.1566 20 14.1217 20 12C20 9.87827 19.1571 7.84344 17.6569 6.34315C16.1566 4.84285 14.1217 4 12 4ZM12 6C12.2449 6.00003 12.4813 6.08996 12.6644 6.25272C12.8474 6.41547 12.9643 6.63975 12.993 6.883L13 7V11.586L15.707 14.293C15.8863 14.473 15.9905 14.7144 15.9982 14.9684C16.006 15.2223 15.9168 15.4697 15.7488 15.6603C15.5807 15.8508 15.3464 15.9703 15.0935 15.9944C14.8406 16.0185 14.588 15.9454 14.387 15.79L14.293 15.707L11.293 12.707C11.1376 12.5514 11.0378 12.349 11.009 12.131L11 12V7C11 6.73478 11.1054 6.48043 11.2929 6.29289C11.4804 6.10536 11.7348 6 12 6Z" fill="#FF9F1C"/>
                                    </svg>
                                    <span>6 Days</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="destination">
                        <div class="img">
                            <div class="view_trip_wrap">
                                <a href="#" class="view_trip button">
                                    <span>View trip</span>
                                </a>
                            </div>
                        </div>
                        <div class="destinations_details">
                            <p class="destination_title">Eiffel Tower</p>
                            <p class="destination_excerpt">
                                Nulla quis mi mattis, luctus massa id, lobortis sapien. Duis hendrerit feugiat lorem et ullamcorper. Nullam ut lectus augue. Praesent tempus feugiat eros tempor iaculis.
                            </p>
                            <div class="details">
                                <div class="location">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M11.778 10.7778H11.788V10.7878H11.778V10.7778Z" stroke="#FF9F1C" stroke-width="3.75" stroke-linejoin="round"/>
                                        <path d="M11.778 21.7778L17.278 16.2778C18.3657 15.19 19.1065 13.8041 19.4066 12.2953C19.7067 10.7865 19.5526 9.22263 18.9639 7.80141C18.3752 6.38018 17.3783 5.16545 16.0992 4.31081C14.8201 3.45616 13.3163 3 11.778 3C10.2397 3 8.73589 3.45616 7.45681 4.31081C6.17774 5.16545 5.18081 6.38018 4.5921 7.80141C4.00339 9.22263 3.84934 10.7865 4.14943 12.2953C4.44952 13.8041 5.19027 15.19 6.278 16.2778L11.778 21.7778Z" stroke="#FF9F1C" stroke-width="2.5" stroke-linejoin="round"/>
                                    </svg>
                                    <span>Paris, France</span>
                                </div>
                                <div class="duration">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12 2C17.523 2 22 6.477 22 12C22 17.523 17.523 22 12 22C6.477 22 2 17.523 2 12C2 6.477 6.477 2 12 2ZM12 4C9.87827 4 7.84344 4.84285 6.34315 6.34315C4.84285 7.84344 4 9.87827 4 12C4 14.1217 4.84285 16.1566 6.34315 17.6569C7.84344 19.1571 9.87827 20 12 20C14.1217 20 16.1566 19.1571 17.6569 17.6569C19.1571 16.1566 20 14.1217 20 12C20 9.87827 19.1571 7.84344 17.6569 6.34315C16.1566 4.84285 14.1217 4 12 4ZM12 6C12.2449 6.00003 12.4813 6.08996 12.6644 6.25272C12.8474 6.41547 12.9643 6.63975 12.993 6.883L13 7V11.586L15.707 14.293C15.8863 14.473 15.9905 14.7144 15.9982 14.9684C16.006 15.2223 15.9168 15.4697 15.7488 15.6603C15.5807 15.8508 15.3464 15.9703 15.0935 15.9944C14.8406 16.0185 14.588 15.9454 14.387 15.79L14.293 15.707L11.293 12.707C11.1376 12.5514 11.0378 12.349 11.009 12.131L11 12V7C11 6.73478 11.1054 6.48043 11.2929 6.29289C11.4804 6.10536 11.7348 6 12 6Z" fill="#FF9F1C"/>
                                    </svg>
                                    <span>6 Days</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php get_template_part( 'template_parts/pagination' ); ?>
            </div>
        </div>
    </div>
</main>