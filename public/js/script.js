var dropdown = document.getElementById("dropdown");
var overlay = document.getElementById("overlay");
var notif = document.getElementById("notif_drop");
var prof_butt = document.getElementById("profile-menu");
var notif_butt = document.getElementById("notif");
var main = document.getElementById("main");
var task_content = document.getElementById("task_tracker_content");
var tags_content = document.getElementById("tags_content");
var attendance_content = document.getElementById("attendance_content");
var daily_time_sheet_content = document.getElementById("daily_time_sheet_content");
var settings_content = document.getElementById("settings_content");
var feedback_content = document.getElementById("feedback_content");
var users_content = document.getElementById("users_content");
var invite_users_content = document.getElementById("invite_users_content");
var projects_content = document.getElementById("projects_content");

// var comment_butts_list = document.getElementsByClassName("comment_butt");
// var more_butts_list = document.getElementsByClassName("more_butt");


prof_butt.addEventListener("click", function() {
    // var status = profile_menu.getAttribute("aria-expanded");
    if (dropdown.classList.contains("closed")) {
        dropdown.classList.remove("hidden", "closed");
        window.addEventListener('mouseup', outside_click_profile, false);
    } else {
        dropdown.classList.add("hidden", "closed");
        window.removeEventListener('mouseup', outside_click_profile, false);
    }
})
notif_butt.addEventListener("click", function() {
    // var status = profile_menu.getAttribute("aria-expanded");
    if (notif.classList.contains("closed")) {
        notif.classList.remove("hidden", "closed");
        window.addEventListener('mouseup', outside_click_notif, false);
    } else {
        notif.classList.add("hidden", "closed");
        window.removeEventListener('mouseup', outside_click_notif, false);
    }
})

function outside_click_profile(event) {
    if (event.target != dropdown && event.target.parentNode != dropdown && event.target != prof_butt && event.target.parentNode != prof_butt) {
        close_profile_menu();
    }
}

function outside_click_notif(event) {
    if (event.target != notif && event.target.parentNode != notif && event.target != notif_butt && event.target.parentNode != notif_butt) {
        close_notif();
    }
}

function close_profile_menu() {
    if (!dropdown.classList.contains("closed")) {
        dropdown.classList.add("hidden", "closed");
        window.removeEventListener('mouseup', outside_click_profile, false);
    }
}

function close_notif() {
    if (!notif.classList.contains("closed")) {
        notif.classList.add("hidden", "closed");
        window.removeEventListener('mouseup', outside_click_notif, false);
    }
}


function task_table_ev_listener() {
    document.getElementById("table1").addEventListener('click', function(event) {
        if (event.target.closest('.comment_butt')) {
            opendropdown("popup_cmnt");
        } else if (event.target.closest('.more_butt')) {

            append_more_menu(event.target.closest('.more_butt'));
        } else if (event.target.closest('input')) {
            return;
        } else {
            removedrops();
        }

    });
}

if (document.getElementById("admin_users_table")) {
    document.getElementById("admin_users_table").addEventListener('click', function(event) {
        if (event.target.closest('.users_actions')) {
            append_users_actions_menu(event.target.closest('.users_actions'));
        } else {
            removedrops();
        }

    });
}

function cmnts_ev_listener() {
    document.getElementById("comments_section").addEventListener('click', function(event) {
        if (event.target.closest('.cmnt_state_open')) {
            event.target.closest('.cmnt_state_open').classList.add("cmnt_state_closed", "rotate-0");
            let cmnttext = event.target.closest('.cmnt_state_open').parentElement.parentElement.getElementsByClassName('cmnt_text')[0];
            cmnttext.classList.add("h-0", "opacity-0");
            cmnttext.classList.remove("opacity-100", "h-full");
            event.target.closest('.cmnt_state_open').classList.remove("cmnt_state_open", "rotate-90");

        } else if (event.target.closest('.cmnt_state_closed')) {
            event.target.closest('.cmnt_state_closed').classList.add("cmnt_state_open", "rotate-90");
            let cmnttext = event.target.closest('.cmnt_state_closed').parentElement.parentElement.getElementsByClassName('cmnt_text')[0];
            cmnttext.classList.remove("h-0", "opacity-0");
            cmnttext.classList.add("opacity-100", "h-full");
            event.target.closest('.cmnt_state_closed').classList.remove("cmnt_state_closed", "rotate-0");
        }

    });
}

window.onload = function() {
    task_table_ev_listener();
};

function make_active(el, cont) {
    let active = document.getElementsByClassName("active_menulabel")[0];
    let tab = document.getElementsByClassName("active_tab")[0];
    active.classList.add("text-gray-600", "hover:bg-gray-50", "focus:text-gray-900", "focus:bg-gray-50");
    active.classList.remove("active_menulabel", "text-gray-900", "bg-gray-100", "hover:bg-gray-100", "focus:bg-gray-200");
    active.getElementsByTagName("svg")[0].classList.remove("text-gray-500");
    active.getElementsByTagName("svg")[0].classList.add("text-gray-400");
    el.getElementsByTagName("svg")[0].classList.remove("text-gray-400");
    el.getElementsByTagName("svg")[0].classList.add("text-gray-500");
    el.classList.remove("text-gray-600", "hover:bg-gray-50", "focus:text-gray-900", "focus:bg-gray-50");
    el.classList.add("active_menulabel", "text-gray-900", "bg-gray-100", "hover:bg-gray-100", "focus:bg-gray-200");
    tab.classList.add("hidden")
    tab.classList.remove("active_tab", "inline-block")
    cont.classList.remove("hidden");
    cont.classList.add("active_tab", "inline-block");
}

document.getElementById("sidebar-cont-user").addEventListener('click', function(event) {

    if (event.target.closest('.task_tracker')) {
        if (event.target.closest('.task_tracker').classList.contains("active_menulabel")) {
            return;
        } else {
            make_active(event.target.closest('.task_tracker'), task_content);
            // task_table_ev_listener();
        }


    } else if (event.target.closest('.tags')) {
        if (event.target.closest('.tags').classList.contains("active_menulabel")) {
            return;
        } else {
            make_active(event.target.closest('.tags'), tags_content);

        }

    } else if (event.target.closest('.attendance')) {
        if (event.target.closest('.attendance').classList.contains("active_menulabel")) {
            return;
        } else {
            make_active(event.target.closest('.attendance'), attendance_content);

        }

    } else if (event.target.closest('.daily_time_sheet')) {
        if (event.target.closest('.daily_time_sheet').classList.contains("active_menulabel")) {
            return;
        } else {
            make_active(event.target.closest('.daily_time_sheet'), daily_time_sheet_content);

        }

    } else if (event.target.closest('.settings')) {
        if (event.target.closest('.settings').classList.contains("active_menulabel")) {
            return;
        } else {
            make_active(event.target.closest('.settings'), settings_content);

        }

    } else if (event.target.closest('.feedback')) {
        if (event.target.closest('.feedback').classList.contains("active_menulabel")) {
            return;
        } else {
            make_active(event.target.closest('.feedback'), feedback_content);

        }
    } else if (event.target.closest('.projects')) {
        if (event.target.closest('.projects').classList.contains("active_menulabel")) {
            return;
        } else {
            make_active(event.target.closest('.projects'), projects_content);

        }
    } else if (event.target.closest('.invite_users')) {
        if (event.target.closest('.invite_users').classList.contains("active_menulabel")) {
            return;
        } else {
            make_active(event.target.closest('.invite_users'), invite_users_content);

        }
    } else if (event.target.closest('.users')) {
        if (event.target.closest('.users').classList.contains("active_menulabel")) {
            return;
        } else {
            make_active(event.target.closest('.users'), users_content);

        }
    }

});


function removedrops() {
    var users_actions = document.getElementById("dropdown_users_actions");
    var more = document.getElementById("dropdown_modif");
    if (users_actions) {
        users_actions.parentNode.removeChild(users_actions);
    }
    if (more) {
        more.parentNode.removeChild(more);
    }
}

function append_users_actions_menu(el) {
    removedrops();
    el.parentElement.innerHTML += /*html*/ `
    
    <div id="dropdown_users_actions" class="tabsdrop absolute origin-top-right z-10 right-2 w-20 rounded-md shadow-lg">
    <div class="py-1 rounded-md bg-white shadow-xs" role="menu" aria-orientation="vertical" aria-labelledby="user-menu">
        <a href="javascript:ShowHideedit()" class="block px-2 py-1 text-sm text-gray-700 hover:bg-gray-100 transition ease-in-out duration-150" role="menuitem">Edit</a>
        <a href="javascript:ShowHideres()" class="block px-2 py-1 text-sm text-gray-700 hover:bg-gray-100 transition ease-in-out duration-150" role="menuitem">Resend</a>
        <a href="javascript:ShowHidedel()" class="block px-2 py-1 text-sm text-red-700 font-semibold hover:bg-gray-100 transition ease-in-out duration-150" role="menuitem">Delete</a>
    </div>
</div>`;
}

function append_more_menu(el) {
    removedrops();
    el.parentElement.innerHTML += /*html*/ `
    <div id="dropdown_modif" class="tabsdrop absolute origin-top-right z-10 right-0 mt-6 w-16 rounded-md shadow-lg">
    <div class="py-1 rounded-md bg-white shadow-xs" role="menu" aria-orientation="vertical" aria-labelledby="user-menu">
        <a href="#" class="block px-2 py-1 text-sm text-gray-700 hover:bg-gray-100 transition ease-in-out duration-150" role="menuitem">Edit</a>

        <a href="#" class="block px-2 py-1 text-sm text-gray-700 hover:bg-gray-100 transition ease-in-out duration-150" role="menuitem">Delete</a>
    </div>
</div>`;
}

// function append_cmnt_menu(el) {
//     removedrops();
//     el.parentElement.innerHTML += `<div id="dropdown_comment" class="tabsdrop absolute origin-top-right z-10 right-0 mt-6 w-56 rounded-md shadow-lg">
//                                                         <div class="py-1 rounded-md bg-white shadow-xs" role="menu" aria-orientation="vertical" aria-labelledby="user-menu">

//                                                             <div class="text-gray-600 py-2 px-4 border-b-2 font-bold text-sm">Latest Comment</div>
//                                                             <div class="max-h-24 overflow-y-auto px-4 py-2 text-xs text-gray-400">
//                                                                 Hey user Lorem please add some details and improve the result. Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores optio fugiat eveniet voluptatibus autem neque numquam dolores sequi quos explicabo quod numquam.
//                                                             </div>
//                                                             <div class="border-t-2">
//                                                                 <label class="text-xs text-gray-500 px-4 py-1" for="input">Reply</label>
//                                                                 <div class="flex mx-4">
//                                                                     <input class="border-gray-300 border-2 px-0.5 rounded-md focus:outline-none" type="text-area" placeholder="Enter your reply here">
//                                                                     <button class="mx-2 focus:outline-none text-gray-300">
//                                                                         <svg class="w-5 h-5 transform rotate-90" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10.894 2.553a1 1 0 00-1.788 0l-7 14a1 1 0 001.169 1.409l5-1.429A1 1 0 009 15.571V11a1 1 0 112 0v4.571a1 1 0 00.725.962l5 1.428a1 1 0 001.17-1.408l-7-14z"></path></svg>
//                                                                     </button>
//                                                                 </div>
//                                                             </div>
//                                                         </div>
//                                                     </div>`;
// }

function append_cmnt_popup() {



    let popup_content = /*html*/ `<div id="popup_comment" class="tabsdrop pb-2 flex flex-col absolute z-30 w-1/2 bg-white transform top-1/2 right-1/2 translate-x-1/2 -translate-y-1/2 rounded-lg transition-all duration-500 ease-in-out h-3/4">
    <div class="flex items-center px-4 text-gray-600">
        <div class="text-lg py-2 font-bold text-center flex-grow -mr-6 ">Comments</div>
        <button class="focus:outline-none" onClick="closedropdown('popup_cmnt')">
            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"></path></svg>
        </button>
    </div>


  
        <div class="flex flex-col px-4 pt-6 pb-3">

            <textarea class="rounded-t-md w-full border-2 h-28 resize-none text-sm text-gray-500 focus:outline-none p-0.5"></textarea>
            <div class="flex justify-end items-center px-4 py-2 bg-gray-200 rounded-b-md">
            <!--<div class="flex text-sm text-gray-600 items-center">
            <input id="cmnt_toggle" class="mr-2" type="checkbox" onclick="ShowHidecmnt(this)" checked/>
            <span>Show previous comments</span>
            </div>-->
            <button class="rounded-lg px-2 py-1 text-gray-50 bg-gray-400 text-sm hover:bg-gray-600 transform duration-300 ease-in-out">Send</button>
            </div>
        </div>

    <!-- comments container -->
    <div id="comments_section" class="px-4 overflow-y-auto transition-all duration-500 ease-in-out">
        <!-- comments goes here -->
        <!-- cmnt start div -->
        <div class="py-2">
            <div class="text-sm text-gray-600 flex items-center">
            <button class="cmnt_state_open transform duration-300 rotate-90 mr-1 focus:outline-none hover:text-gray-600 text-gray-400">
            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
            </button>
            <a class="font-semibold hover:underline" href="#">Elie Tannoury</a>
            <span class="mx-2 italic text-xs">02:00 hours ago</span>
            </div>
            <div class="cmnt_text text-sm py-0.5 pl-5 text-gray-500 opacity-100 transform duration-300 h-full">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem ex enim ab dolores obcaecati eos velit dolore, magnam totam sed non pariatur iusto omnis necessitatibus facere maiores sit! Sunt, doloribus!
            </div>
        </div>
        <!-- cmnt end div -->
        <!-- cmnt start div -->
        <div class="py-2">
            <div class="text-sm text-gray-600 flex items-center">
            <button class="cmnt_state_open transform duration-300 rotate-90 mr-1 focus:outline-none hover:text-gray-600 text-gray-400">
            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
            </button>
            <a class="font-semibold hover:underline" href="#">Elie Tannoury</a>
            <span class="mx-2 italic text-xs">March 22, 2021</span>
            </div>
            <div class="cmnt_text text-sm py-0.5 pl-5 text-gray-500 opacity-100 transform duration-300 h-full">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem ex enim ab dolores obcaecati eos velit dolore, magnam totam sed non pariatur iusto omnis necessitatibus facere maiores sit! Sunt, doloribus!
            </div>
        </div>
        <!-- cmnt end div -->

        <div id="loadmore" class="py-4 text-gray-500 flex items-center justify-center">
          <a onclick="loadmore()" class="cursor-pointer text-xs italic text-center hover:text-gray-700 hover:underline font-semibold mx-2 rounded-md focus:outline-none">Load More</a>
          <span>|</span>
          <a onclick="viewall()" class="cursor-pointer text-xs italic text-center hover:text-gray-700 hover:underline font-semibold mx-2 rounded-md focus:outline-none">View All</a>
        </div>
      
    </div>

</div>`;

    var newElement = document.createElement("div");
    newElement.innerHTML = popup_content;
    insertAfter(newElement, overlay);



    ///////////////////////////////////////
    cmnts_ev_listener();

}

// function ShowHidecmnt(checkbox) {
//     let popup = document.getElementById("popup_comment");

//     let cmnt_section = document.getElementById("comments_section");
//     if (checkbox.checked) {
//         cmnt_section.classList.add("opacity-100");
//         cmnt_section.classList.remove("opacity-0", "h-0");
//         popup.classList.add("h-3/4");
//     } else {
//         cmnt_section.classList.remove("opacity-100");
//         cmnt_section.classList.add("opacity-0", "h-0");
//         popup.classList.remove("h-3/4");
//     }
// }
function ShowHidedel() {
    let popup = document.getElementById("del_popup");

    if (popup.classList.contains("hidden")) {
        popup.classList.remove("hidden");
    } else {
        popup.classList.add("hidden");
    }
}

function ShowHideedit() {
    let popup = document.getElementById("edit_popup");

    if (popup.classList.contains("hidden")) {
        popup.classList.remove("hidden");
    } else {
        popup.classList.add("hidden");
    }
}
function ShowHideres() {
    let popup = document.getElementById("resend_popup");

    if (popup.classList.contains("hidden")) {
        popup.classList.remove("hidden");
    } else {
        popup.classList.add("hidden");
    }
}

function ShowHideinv() {
    let popup = document.getElementById("invite_popup");

    if (popup.classList.contains("hidden")) {
        popup.classList.remove("hidden");
    } else {
        popup.classList.add("hidden");
    }
}

function loadmore() {

    let newcmnts = /*html*/ `        <!-- cmnt start div -->
    <div class="py-2">
        <div class="text-sm text-gray-600 flex items-center">
        <button class="cmnt_state_open transform duration-300 rotate-90 mr-1 focus:outline-none hover:text-gray-600 text-gray-400">
        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
        </button>
        <a class="font-semibold hover:underline" href="#">Elie Tannoury</a>
        <span class="mx-2 italic text-xs">02:00 hours ago</span>
        </div>
        <div class="cmnt_text text-sm py-0.5 pl-5 text-gray-500 opacity-100 transform duration-300 h-full">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem ex enim ab dolores obcaecati eos velit dolore, magnam totam sed non pariatur iusto omnis necessitatibus facere maiores sit! Sunt, doloribus!
        </div>
    </div>
    <!-- cmnt end div -->
    <!-- cmnt start div -->
    <div class="py-2">
        <div class="text-sm text-gray-600 flex items-center">
        <button class="cmnt_state_open transform duration-300 rotate-90 mr-1 focus:outline-none hover:text-gray-600 text-gray-400">
        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
        </button>
        <a class="font-semibold hover:underline" href="#">Elie Tannoury</a>
        <span class="mx-2 italic text-xs">March 22, 2021</span>
        </div>
        <div class="cmnt_text text-sm py-0.5 pl-5 text-gray-500 opacity-100 transform duration-300 h-full">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem ex enim ab dolores obcaecati eos velit dolore, magnam totam sed non pariatur iusto omnis necessitatibus facere maiores sit! Sunt, doloribus!
        </div>
    </div>
    <!-- cmnt end div -->

    `;
    var newElement = document.createElement("div");
    newElement.innerHTML = newcmnts;
    let loadmore = document.getElementById("loadmore");
    let cmnts_section = document.getElementById("comments_section");

    cmnts_section.insertBefore(newElement, loadmore);

    var loaded = document.querySelectorAll(".loadedcmnt");
    setTimeout(() => {
        for (let i of loaded) {
            i.classList.add("opacity-100");
            i.classList.remove("opacity-0", "h-0", "loadedcmnt");

        }
    }, 50);


}

function insertAfter(newElement, referenceElement) {
    referenceElement.parentNode.insertBefore(newElement, referenceElement.nextSibling);
}

document.getElementById("open-sidebar").addEventListener("click", function() {

    let sb = document.getElementById("sidebar");
    let labels = document.getElementsByClassName("menulabel");
    if (sb.classList.contains("opened")) {
        sb.classList.add("w-14", "closed");
        sb.classList.remove("w-52", "opened");
        for (let i = 0; i < labels.length; i++) {
            labels[i].classList.add("hidden");
        }
        checkScrollBar();
    } else if (sb.classList.contains("closed")) {
        sb.classList.add("w-52", "opened");
        sb.classList.remove("w-14", "closed");
        for (let i = 0; i < labels.length; i++) {
            labels[i].classList.remove("hidden");
        }
        checkScrollBar();
    }

});
overlay.addEventListener("click", function() {
    closedropdown("any");
});

function checkesc(e) {
    if (e.keyCode === 27) {
        closedropdown("any");
    }
}
document.addEventListener("keydown", checkesc, false);

// prof_butt.addEventListener("click", function() {

//     if (dropdown.classList.contains("closed")) {
//         opendropdown("profile");

//     } else if (dropdown.classList.contains("opened")) {
//         closedropdown("profile");
//     }

// });
// notif_butt.addEventListener("click", function() {

//     if (notif.classList.contains("closed")) {
//         opendropdown("notif");

//     } else if (notif.classList.contains("opened")) {
//         closedropdown("notif");
//     }

// });

function opendropdown(opt) {
    if (opt == "profile") {
        dropdown.classList.remove("hidden", "closed");
        dropdown.classList.add("opened");
        prof_butt.classList.add("z-30");
        overlay.classList.remove("hidden");
    } else if (opt == "notif") {
        notif.classList.remove("hidden", "closed");
        notif.classList.add("opened");
        notif_butt.classList.add("z-30");
        // overlay.classList.remove("hidden");
    } else if (opt == "popup_cmnt") {
        overlay.classList.remove("hidden");
        append_cmnt_popup();

    }
}

function closedropdown(opt) {
    if (opt == "profile" || opt == "any") {
        dropdown.classList.add("hidden", "closed");
        dropdown.classList.remove("opened");
        prof_butt.classList.remove("z-30");
        overlay.classList.add("hidden");
    }
    if (opt == "notif" || opt == "any") {
        notif.classList.add("hidden", "closed");
        notif.classList.remove("opened");
        notif_butt.classList.remove("z-30");
        // overlay.classList.add("hidden");
    }
    if (opt == "popup_cmnt" || opt == "any") {
        if (document.getElementById("popup_comment")) {
            document.getElementById("popup_comment").parentNode.removeChild(document.getElementById("popup_comment"));
        }
        overlay.classList.add("hidden");
    }
}

window.addEventListener('resize', function(event) {
    checkScrollBar()
});


function checkScrollBar() {

    if (document.getElementById("sidebar-cont")) {
        var sbc = document.getElementById("sidebar-cont");
    } else if (document.getElementById("sidebar-cont-user")) {
        var sbc = document.getElementById("sidebar-cont-user");
    }


    var normalw = 0;
    var scrollw = 0;

    if (sbc.scrollHeight > sbc.clientHeight) {
        normalw = sbc.offsetWidth;
        scrollw = normalw - sbc.clientWidth;
        sbc.style.marginRight = '-' + scrollw + 'px';
    } else if (sbc.scrollHeight <= sbc.clientHeight) {

        sbc.style.marginRight = "0px";
    }
}

let profile_popup = document.getElementById("profile_popup")

function toggleprofile() {
    if (profile_popup.classList.contains("hidden")) {
        profile_popup.classList.remove("hidden");
    } else {
        profile_popup.classList.add("hidden");
    }
}