"use strict"

var $ = document.querySelector.bind(document)
var $$ = document.querySelectorAll.bind(document)

//:slide
var slideBackground = $('.slide')
var slideArray = ['https://images.unsplash.com/photo-1535262412227-85541e910204?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1469&q=80'
,'https://images.unsplash.com/photo-1505228395891-9a51e7e86bf6?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1633&q=80'
, 'https://images.unsplash.com/photo-1618324766504-4a94f694309d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80'
]
let i = 0
function slideAutoBackground() { 
    slideBackground.style.backgroundImage = "url("+slideArray[i]+")" 
    i++
    if(i >= slideArray.length) {i=0}    
    setTimeout(slideAutoBackground, 2000)
}
slideAutoBackground()



