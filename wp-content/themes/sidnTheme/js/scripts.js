function fetchPosts(pageNumber) {
    const wordpressURL = window.location.origin;
    const perPage = 4;
    const postsEndpoint = `${wordpressURL}/wordpress/wp-json/wp/v2/posts?page=${pageNumber}&per_page=${perPage}`;

    fetch(postsEndpoint)
        .then(response => response.json())
        .then(parsedJson => {
            console.log(parsedJson); // Log the parsed JSON response
            const container = document.querySelector('.flex-items_section_3_posts');
            parsedJson.forEach(post => {
                // Fetch the image URL using the ID
                fetch(`${wordpressURL}/wordpress/wp-json/wp/v2/media/${post.acf.post_image}`)
                    .then(response => response.json())
                    .then(media => {
                        const postDiv = document.createElement('div');
                        postDiv.classList.add('post-item');
                        postDiv.innerHTML = `
                            <div class="post_container">
                                <div class="post_header">
                                    <div class="post_img_container"><img src="${media.source_url || ''}" alt="Post Image" class="post_img"></div>
                                    <h2 class="post_title">${post.title.rendered || ''}</h2>
                                </div>
                            </div>
                            <div class="post_body">
                                <p class="post_description">${post.acf.post_description || ''}</p>
                            </div>
                            <div class="post_footer">
                                <button class="post_btn">${post.acf.button_text || ''}→</button>
                            </div>
                        `;
                        container.appendChild(postDiv);
                    })
                    .catch(error => console.error('Error fetching media:', error));
            });
        })
        .catch(error => console.error('Error fetching posts:', error));
}

document.addEventListener('DOMContentLoaded', () => {
    let pageNumber = 1;

    function loadMorePosts() {
        pageNumber++;
        fetchPosts(pageNumber);
    }

    const loadMoreButton = document.getElementById('load-more-button');
    loadMoreButton.addEventListener('click', loadMorePosts);

    fetchPosts(pageNumber);

    window.addEventListener('scroll', () => {
        const container = document.querySelector('.flex-items_section_3_posts');
        const isMobile = window.matchMedia('(max-width: 767px)').matches; // Check if it's a mobile device

        if (isMobile && container.scrollLeft + container.clientWidth >= container.scrollWidth) {
            loadMorePosts();
        }
    });
});