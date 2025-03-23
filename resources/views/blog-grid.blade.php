<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CHROMA - Photography Blog</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@300;400;500;600;700&display=swap');

        body {
            font-family: 'Cormorant Garamond', serif;
        }

        .blog-title {
            font-size: 2.5rem;
            font-weight: 400;
            letter-spacing: 0.5px;
        }

        .nav-link {
            font-size: 1.1rem;
            letter-spacing: 0.5px;
        }

        .post-title {
            font-size: 1.4rem;
            font-weight: 500;
            line-height: 1.3;
        }

        .category {
            font-size: 0.85rem;
            letter-spacing: 1px;
            text-transform: uppercase;
        }

        .date {
            font-size: 0.85rem;
        }

        .contact-text {
            font-size: 1.8rem;
            font-weight: 400;
        }
    </style>
</head>
<body class="bg-[#f7f5f1] text-black">
    <!-- Header -->
    <header class="container mx-auto px-4 py-6 flex justify-between items-center">
        <div class="text-2xl font-semibold tracking-wider flex items-center gap-16">
        <h1 >CHROMA</h1>
        <nav class="hidden md:flex space-x-8">
            <?php
            $menuItems = ['Home', 'Pages', 'Portfolio', 'Blog', 'Shop', 'Contacts'];
            foreach ($menuItems as $item) {
                $active = $item === 'Blog' ? 'border-b border-black' : '';
                echo "<a href='#' class='nav-link $active'>$item</a>";
            }
            ?>
        </nav>
        </div>
        <div class="navbar-end">
                <div class="dropdown dropdown-end mr-2">
                    <label tabindex="0" class="btn btn-ghost btn-circle">
                        <div class="indicator">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                            <span class="badge badge-sm indicator-item text-white bg-[#c69e50]">1</span>
                        </div>
                    </label>
                </div>
                <button class="btn btn-ghost btn-circle">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                </button>
        </div>
    </header>

    <!-- Blog Title -->
    <div class="container mx-auto px-4 py-12 text-center">
        <h1 class="blog-title !text-6xl">Blog Grid</h1>
    </div>

    <!-- Blog Grid -->
    <div class="container mx-auto pb-16">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 px-2">
            <?php
            $blogPosts = [
                [
                    'main_image' => asset('images/post1.jpg'),
                    'category' => 'PHOTOGRAPHY',
                    'published_at' => 'June 14, 2023',
                    'title' => '30 ideas for a summer countryside photography'
                ],
                [
                    'main_image' => asset('images/post2.jpg'),
                    'category' => 'PHOTOGRAPHY',
                    'published_at' => 'June 13, 2023',
                    'title' => 'Top 5 camera lenses to use in nature photography'
                ],
                [
                    'main_image' => asset('images/post3.jpg'),
                    'category' => 'PHOTOGRAPHY',
                    'published_at' => 'June 12, 2023',
                    'title' => 'The connection between web marketing & photo design'
                ],
                [
                    'main_image' => asset('images/post4.jpg'),
                    'category' => 'PHOTOGRAPHY',
                    'published_at' => 'June 13, 2023',
                    'title' => 'We know how to boost Instagram views in no time'
                ],
                [
                    'main_image' => asset('images/post5.jpg'),
                    'category' => 'PHOTOGRAPHY',
                    'published_at' => 'June 13, 2023',
                    'title' => 'Introducing explanation to new camera lens filters'
                ],
                [
                    'main_image' => asset('images/post6.jpg'),
                    'category' => 'PHOTOGRAPHY',
                    'published_at' => 'June 13, 2023',
                    'title' => 'Trending colors and shapes in interior photography'
                ],
                [
                    'main_image' => asset('images/post7.jpg'),
                    'category' => 'PHOTOGRAPHY',
                    'published_at' => 'June 13, 2023',
                    'title' => 'How to upgrade your social media profile today'
                ],
                [
                    'main_image' => asset('images/post8.jpg'),
                    'category' => 'PHOTOGRAPHY',
                    'published_at' => 'June 13, 2023',
                    'title' => 'The best software to edit your images with'
                ],
                [
                    'main_image' => asset('images/post9.jpg'),
                    'category' => 'PHOTOGRAPHY',
                    'published_at' => 'June 13, 2023',
                    'title' => 'Must-have digital camera accessories in 2023'
                ]
            ];

            foreach ($blogPosts as $post) {
                echo '<a href="/blog-detail">';
                echo '<div class="card bg-base-100 rounded-none border-none hover:opacity-90 transition-opacity">';
                echo '<figure><img src="' . $post['main_image'] . '" alt="' . $post['title'] . '" class="w-full h-64 object-cover" /></figure>';
                echo '<div class="card-body px-0 pt-4 pb-8 bg-[#f7f5f1]">';
                echo '<div class="flex items-center space-x-2">';
                echo '<span class="category">' . $post['category'] . '</span>';
                echo '<span class="text-gray-400">•</span>';
                echo '<span class="date text-gray-600 worksans">' . $post['published_at'] . '</span>';
                echo '</div>';
                echo '<h2 class="post-title mt-2">' . $post['title'] . '</h2>';
                echo '</div>';
                echo '</div>';
                echo '</a>';
            }
            ?>
        </div>
    </div>

    <!-- Floating Action Buttons -->
    <div class="fixed right-0 top-1/2 -translate-y-1/2 flex flex-col space-y-2">
        <button class="btn btn-square btn-warning">
            <i class="fas fa-shopping-cart"></i>
        </button>
        <button class="btn btn-square btn-warning">
            <i class="fas fa-envelope"></i>
        </button>
        <button class="btn btn-square btn-warning">
            <i class="fas fa-file"></i>
        </button>
    </div>

    <!-- Footer -->
    <footer class="bg-neutral-900 text-white py-20">
        <div class="container mx-auto px-4">
            <div class="flex flex-wrap  space-x-8 mb-12">
                <?php
                $socialLinks = ['Facebook', 'Twitter', 'Dribbble', 'Instagram'];
                foreach ($socialLinks as $link) {
                    echo "<a href='#' class='text-2xl'>$link</a>";
                }
                ?>
            </div>

            <div class="my-16">
                <h2 class="contact-text mb-2 !text-6xl">Let's work together!</h2>
                <p class="contact-text !text-6xl">Just drop me a line - <a href="mailto:info@xmpl.com" class="underline">info@xmpl.com</a></p>
            </div>

            <div class="worksans text-[#d1d3d5] text-sm">
                <p>ThemeSEX © 2023. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <!-- Back to Top Button -->
    <button onclick="window.scrollTo({top: 0, behavior: 'smooth'})" class="btn btn-circle btn-neutral fixed bottom-4 right-4">
        <i class="fas fa-arrow-up"></i>
    </button>
</body>
</html>
