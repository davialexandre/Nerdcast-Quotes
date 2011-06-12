function postDialog(options) {
    FB.ui({
       method: 'feed',
       name: options.title,
       message: '',
       picture: options.picture,
       link: options.nerdtrackLink,
       caption: '   ',
       description: options.quote,
       actions: [
           {
               name: 'Nerdcast',
               link: options.nerdcastLink
           },
       ]
    });
}

