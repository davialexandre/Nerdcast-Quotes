function popup() {
    FB.ui({
       method: 'feed',
       name: 'Nerdcast Quotes',
       description: 'description',
       caption: 'caption',
       message: 'message',
       picture: 'http://jovemnerd.ig.com.br/wp-content/uploads/podcast_263_tit.jpg',
       link: 'http://www.google.com',
       properties: {
           'NerdCast': {
               text: 'Nerdcast',
               href: 'http://google.com'
           },
           'NerdTrack': {
               text: 'Nerdtrack',
               href: 'http://google.com'
           }
       }
    });
}

