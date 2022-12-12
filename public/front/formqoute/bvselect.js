/*-------------------------

BVSelect - Vanilla Javascript Fully Customizable SelectBox v1.3
https://github.com/BMSVieira/BVSelect-VanillaJS

Made by: Bruno Vieira

--------------------------- */

class BVSelect {

    constructor({
        selector = 'defaultId',
        width = "100%",
        searchbox = false,
        offset = true,
        search_placeholder = "Search...",
        placeholder = "Select Option",
        breakpoint = "600"
    }) 
    {

        // Random Number generated
        var randomID = Math.floor(Math.random() * (9999 - 0 + 1)) + 0;
        var SearchPlaceholder = search_placeholder;
        var MainPlaceholder = placeholder;
        var selectedIDFocus = 0; // Save wich dropdown is currently open
        var selectedMultiple = [];
        var selected_option_text = "";
        var first_option_text = "";
        var MDivSelector = selector.substring(1);

        // Define Variables
        this.selector = selector.substring(1);
        this.searchbox = searchbox;
        this.width = width;
        this.offset = offset;
        this.randomID = randomID;
        this.search_placeholder;
        this.breakpoint = breakpoint;

        // Hides native selector
        document.getElementById(this.selector).style.display = "none";

        // ** ADD OPTIONS TO LIST ** 
        this.SetupListOptions = function() {
            // Get All options inside Selectbox
            var x = document.getElementById(this.selector);
            for (var i = 0; i < x.length; i++) {

                var optionText = x[i].text;
                var optionValue = x[i].value;
                var optionDisabled = x[i].disabled;
                var optionSeparator = x[i].getAttribute("data-separator");
                var optionImg = x[i].getAttribute("data-img");
                var optionIcon = x[i].getAttribute("data-icon");

                // Option Disabled
                if (optionDisabled == true) {
                    var is_disabled = "bv_disabled";
                } else {
                    var is_disabled = "";
                }
                // Separator
                if (optionSeparator) {
                    var is_separator = "bv_separator";
                } else {
                    var is_separator = "";
                }
                // Check for Attachment  
                if (optionImg) {
                    var has_attachment = "<img src=" + optionImg + ">";
                } else {
                    if (optionIcon) {
                        var has_attachment = "<i class='" + optionIcon + "' aria-hidden='true'></i>";
                    } else {
                        var has_attachment = "";
                    }
                }

                // Append
                document.getElementById("ul_" + randomID).insertAdjacentHTML('beforeend', "<li class='" + is_disabled + " " + is_separator + "'  > " + has_attachment + " " + optionText + "</li>");
            }

            document.querySelectorAll('#ul_' + randomID + ' li').forEach((item) => {

                item.addEventListener('click', (e) => {
                    const index = Array.from(item.parentNode.children).indexOf((item))
                    var selected_option = document.getElementById(this.selector);

                    if (this.searchbox == true) {
                        var numberless = -1;
                    } else {
                        var numberless = "";
                    }

                    if (item.classList.contains("bv_disabled") || item.classList.contains("nofocus") || item.classList.contains("bv_separator")) {} else {
                        if (selected_option.attributes.multiple) {
                            var SelectedNames = "";
                            event.preventDefault();

                            if (selectedMultiple.indexOf(index) > -1) {
                                var index_test = selectedMultiple.indexOf(index);
                                selectedMultiple.splice(index_test, 1);
                                document.getElementById(this.selector)[index + numberless].selected = false;
                                item.style.backgroundColor = "transparent";
                            } else {
                                selectedMultiple.push(index);
                                item.style.backgroundColor = "#ececec";
                            } // Adds to array 

                            // Check if array is empty, if it is, gets the first option
                            if (selectedMultiple.length == 0) {
                                SelectedNames = MainPlaceholder;
                            } else {

                                for (var i = 0; i < selectedMultiple.length; i++) {

                                    var indexValFromArray = selectedMultiple[i];
                                    document.getElementById(this.selector).getElementsByTagName('option')[indexValFromArray + numberless].selected = 'selected';
                                    SelectedNames += ", " + selected_option[indexValFromArray - 1].innerHTML;

                                }
                                SelectedNames = SelectedNames.substring(2);
                            }

                            // Adds the texto o the main DIV
                            document.getElementById("main_" + randomID).innerHTML = SelectedNames + "<i id='arrow_" + randomID + "' class='arrows_bv arrow down'></i>";

                        } else {
                            // Get Index of option
                            document.getElementById(this.selector).getElementsByTagName('option')[index + numberless].selected = 'selected';
                            // Trigger onchange function
                            if (x.getAttribute("onchange") != null) {
                                document.getElementById(this.selector).onchange();
                            }
                            // Updates main div
                            document.getElementById("main_" + randomID).innerHTML = item.textContent + "<i id='arrow_" + randomID + "' class='arrows_bv arrow down'></i>";
                            document.getElementById("ul_" + randomID).style.display = "none";

                            // Remove class so Body has Scroll Again
                            document.body.classList.remove("stop-scrolling");
                            if(document.body.contains(document.getElementById('deletebg'))){
                                   document.getElementById("deletebg").remove();
                            }

                              FixVerticalViewPort();
                        }

                        // When click, resets search filter
                        if (this.searchbox == true) {
                            document.getElementById("input_" + randomID).value = "";
                            Array.from(document.querySelectorAll("#ul_" + randomID + " li")).forEach(function(val) {
                                val.style.display = "block";
                            });
                        }
                    }
                })
            });
        }

        
    // Set option
    SetOption(properties) {

        var selectorIndex = document.getElementById(this.selector);

        // If is set by index
        if(properties.type == "byIndex")
        {
            selectorIndex.selectedIndex = properties.value; 

            // Trigger onchange function
            if (selectorIndex.getAttribute("onchange") != null) { document.getElementById(this.selector).onchange(); }
            document.getElementById("main_" + this.randomID).innerHTML = selectorIndex.options[selectorIndex.selectedIndex].text + "<i id='arrow_" + this.randomID + "' class='arrows_bv arrow down'></i>";

        // if is set by value
        } else if(properties.type == "byValue")
        {
            for (var i = 0; i < selectorIndex.length; i++) {

                 if(selectorIndex[i].value == properties.value)
                 {
                    selectorIndex.selectedIndex = selectorIndex[i].index; 

                    // Trigger onchange function
                    if (selectorIndex.getAttribute("onchange") != null) { document.getElementById(this.selector).onchange(); }
                    document.getElementById("main_" + this.randomID).innerHTML = selectorIndex[i].innerText + "<i id='arrow_" + this.randomID + "' class='arrows_bv arrow down'></i>";
                 }
            }

        }
    }

}