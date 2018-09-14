const searchTerm = document.querySelector('#search-term')
const searchResultsHolder = document.querySelector('#search-results-holder')
const locationFilter = document.querySelector('#location-filter')
let selectableOptions = document.querySelectorAll('.options')

searchTerm.addEventListener('click', () => {
    if(searchTerm.value.length <= 0)
        searchResultsHolder.style.display='block'
})

searchTerm.addEventListener('keyup',()=>{
    if(searchTerm.value.length >= 3) {
        searchResultsHolder.innerHTML = `Loading...`
        searchResultsHolder.style.display = 'block'

        fetch('https://localhost/project/search.php',{
            keywords: searchTerm.value,
            fiterterm: locationFilter.value
        }).then( results => {
            results = JSON_Parse( results )
            //Loop and create paragraph HTMl string
            
            searchResultsHolder.innerHTML = HTMLStringHere
            
        }).catch( function(error){
            console.log( error )
        })

    }else {
        searchResultsHolder.style.display = 'none'
    }
})

searchResultsHolder.addEventListener('click', event => {
    if( event.target.nodeName == 'P') {
        searchTerm.value = event.target.innerText
        searchResultsHolder.style.display = 'none'
    }
})
