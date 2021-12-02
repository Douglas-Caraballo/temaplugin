const LoadMore = document.getElementById('load-more');
let posted= document.querySelector('.ContentPost');
let ItemPost;
if(posted){
    ItemPost=posted.querySelector('.ContenPostItem');
    LoadMore.addEventListener('click', async()=>{
    const url = requestListPostVar.url;
    const posts = await request_posts(url);
    display_post(posts);
    });
}

function display_post(posts){
    posts.map(post => {
        let NewItemPost = ItemPost.cloneNode(true);

        let permalink = NewItemPost.querySelector('.PostImg a');
        permalink.setAttribute('href', post.permalink);
        permalink.innerHTML=post.thumbnail;

        let category = NewItemPost.querySelector('.PostCategoriesName');
        category.innerHTML="";
        console.log(post.category);
        //let count=0;
        post.category.map(cat =>{
            let link = document.createElement("a");
            link.setAttribute('href',cat.taxonomy+'/'+cat.slug);
            link.innerHTML=cat.name+" - ";
            category.appendChild(link);
            /*count++
            while (count>0){
                document.createTextNode("/");
                count=0;
            }*/
        })
        category.insertAdjacentHTML('afterbegin','- ');
        //category.insertAdjacentHTML('beforeend','-');

        let title = NewItemPost.querySelector('.PostTitle a');
        title.setAttribute('href', post.permalink);
        title.innerHTML=post.title;

        let excerpt = NewItemPost.querySelector('.PostExcerpt');
        excerpt.innerHTML=post.excerpt;

        let date = NewItemPost.querySelector('.PostInfoDate');
        date.innerHTML=post.author+' / '+post.date;

        posted.insertAdjacentElement('beforeend', NewItemPost);
    });
}


async function request_posts(url){
    let current_page = LoadMore.dataset.currentPage;

    let next_page = parseInt(current_page, 10) + 1;

    LoadMore.dataset.currentPage=next_page;

    const response = await fetch(`${url}?paged=${next_page}&per_page=2`);

    const posts = await response.json();

    return posts.posts;

}