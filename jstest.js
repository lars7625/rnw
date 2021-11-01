window.onload = function (){
    // select all anchors
    const anchors = document.querySelectorAll("a")
    let dataLayer = []
    anchors.forEach(link => {
        // set action
        if(!link.dataset.action) {
            link.setAttribute('data-action', link.pathname)
        }
        // set category
        if(!link.dataset.category) {
            let node = link
            let cat
            // find parentNode for category name
            while (node.nodeName !== 'BODY' &&
                    node.nodeName !== 'FOOTER' && 
                    node.nodeName !== 'HEADER' && 
                    node.nodeName !== 'NAV' &&
                    node.nodeName !== 'ARTICLE') {
                node = node.parentNode
            }
            // set NAV to navigation and others to lowercase
            if(node.nodeName === 'NAV') {
                cat = 'navigation'
            } else {
                cat = node.nodeName.toLowerCase()
            }
            link.setAttribute('data-category', cat)
        }
        // set label
        if(!link.dataset.label) {
            if(link.host === 'www.yaga-burundi.com' ||
                link.host === '') {
                    link.setAttribute('data-label', 'content_interaction')
                } else {
                    link.setAttribute('data-label', 'external_interaction')
                }
        }
        //push data objects into an array
        link.onclick = e => {
            e.preventDefault()
            dataLayer.push({ 
                action : link.dataset.action, 
                category : link.dataset.category, 
                label : link.dataset.label
            }); 
            // log array with objects in console
            console.log(dataLayer)
        }
    })
}