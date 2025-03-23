<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Introducing explanation to new camera lens filters - CHROMA</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@300;400;500;600;700&display=swap');

        body {
            font-family: 'Cormorant Garamond', serif;
            color: #333;
            line-height: 1.6;
        }

        .nav-link {
            font-size: 1.1rem;
            letter-spacing: 0.5px;
        }

        .article-title {
            font-size: 2.5rem;
            font-weight: 400;
            line-height: 1.2;
            letter-spacing: 0.5px;
        }

        .category-badge {
            background-color: #b78e65;
            color: white;
            padding: 4px 12px;
            font-size: 0.7rem;
            letter-spacing: 1px;
            text-transform: uppercase;
        }

        .drop-cap::first-letter {
            float: left;
            font-size: 4rem;
            line-height: 0.8;
            padding-right: 8px;
            padding-top: 4px;
        }

        .contact-text {
            font-size: 1.8rem;
            font-weight: 400;
        }

        .tag-button {
            border: 1px solid #e5e5e5;
            padding: 4px 12px;
            font-size: 0.9rem;
            transition: all 0.3s;
        }

        .tag-button:hover {
            background-color: #f5f5f5;
        }

        blockquote {
            border-left: none;
            padding-left: 0;
            font-style: italic;
            color: #666;
        }
    </style>
</head>
<body class="bg-white text-black">
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
        <div class="navbar-end flex">
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

    <!-- Article Content -->
    <main class="container mx-auto px-4 mb-16">
        <!-- Category Badge -->
        <div class="my-8 max-w-4xl mx-auto">
            <span class="category-badge">PHOTOGRAPHY</span>
        </div>

        <!-- Article Title -->
        <h1 class="article-title mb-4 max-w-4xl mx-auto">Introducing explanation to new camera lens filters</h1>

        <!-- Article Meta -->
        <div class="flex items-center text-sm text-gray-600 mb-8 max-w-4xl mx-auto">
            <span>BY PETER BOWMAN</span>
            <span class="mx-2">•</span>
            <span>JUNE 13, 2023</span>
            <span class="mx-2">•</span>
            <span>0 COMMENTS</span>
        </div>

        <!-- Featured Image -->
        <div class="mb-10">
            <img src="{{ asset('images/post-detail.jpg') }}" alt="Woman leaning against tree" class="w-full h-auto">
        </div>

        <!-- Article Content -->
        <div class="article-content max-w-4xl mx-auto space-y-6 text-lg">
            <p class="drop-cap">
                Proin hendrerit non neque a sodales, sed interdum est blandit sed. Sed nunc lacinia sagittis nisi in consequat. Fusce sodales augue a accumsan. Cras explicabo, ipsum eget blandit pulvinar, integer tincidunt. Cras dapibus, ligula et euismod pretium, mauris tellus egestas felis, aliquet sit ligula, pretium eu, consequat vitae, molestie ac, orci.
            </p>

            <p>
                Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa, quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt, explicabo.
            </p>

            <h3 class="text-2xl font-medium mt-10 mb-4">VARIUS ENIM SIT ALIQUET</h3>

            <p>
                Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa, quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt, explicabo.
            </p>

            <blockquote class="py-6 px-4 my-8">
                <p class="text-xl mb-4">
                    Curabitur ipsum ante et dictum tincidunt consequat. Mauris sollicitudin enim condimentum, dictum enim justo non, molestie nisi.
                </p>
                <footer class="text-right">
                    <span>— Peter Bowman</span>
                </footer>
            </blockquote>

            <p>
                Ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa, quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt, explicabo.
            </p>

            <!-- Video Section -->
            <div class="my-10 relative" style="padding-top: 56.25%;">
                <iframe
                    class="absolute top-0 left-0 w-full h-full"
                    src="https://www.youtube.com/embed/dQw4w9WgXcQ"
                    title="Camera Lens Filters"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen>
                </iframe>
            </div>

            <h3 class="text-2xl font-medium mt-10 mb-4">Individual approach to every project</h3>

            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            </p>

            <p>
                Etiam vitae leo et diam pellentesque porta. Sed eleifend ultricies risus, vel rutrum erat commodo ut. Praesent finibus congue euismod. Nullam scelerisque massa vel augue placerat, a tempor sem egestas. Curabitur placerat finibus lacus.
            </p>

            <!-- Tags -->
            <div class="flex flex-wrap gap-2 mt-10">
                <a href="#" class="tag-button">article</a>
                <a href="#" class="tag-button">design</a>
                <a href="#" class="tag-button">news</a>
                <a href="#" class="tag-button">photo</a>
            </div>

            <!-- Post Navigation -->
            <div class="flex justify-between items-center border-t border-b border-gray-200 py-6 my-10">
                <a href="#" class="flex items-center gap-2">
                    <i class="fas fa-arrow-left"></i>
                    <div>
                        <div class="text-xs text-gray-500">PREVIOUS</div>
                        <div class="text-sm">Trending colors and shapes in interior photography</div>
                    </div>
                </a>
                <a href="#" class="flex items-center gap-2">
                    <div class="text-right">
                        <div class="text-xs text-gray-500">NEXT</div>
                        <div class="text-sm">We know how to boost Instagram views in no time</div>
                    </div>
                    <i class="fas fa-arrow-right"></i>
                </a>
            </div>

            <!-- Author Bio -->
            <div class="bg-gray-50 p-6 flex gap-4 items-start my-10">
                <img src="/placeholder.svg?height=80&width=80" alt="Peter Bowman" class="rounded-full w-16 h-16 object-cover">
                <div>
                    <h4 class="text-xl font-medium">Peter Bowman</h4>
                    <p class="text-sm text-gray-500">AUTHOR, DESIGNER</p>
                    <p class="mt-2">
                        Pellentesque eget sed consequat tempor hendrerit ut dictum et ipsum. Mauris ut ipsum tempus et dolor sit amet enim elit.
                    </p>
                    <div class="flex gap-2 mt-3">
                        <a href="#" class="text-gray-600 hover:text-black"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="text-gray-600 hover:text-black"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="text-gray-600 hover:text-black"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="text-gray-600 hover:text-black"><i class="fab fa-pinterest-p"></i></a>
                    </div>
                </div>
            </div>

            <!-- Comment Form -->
            <div class="my-10">
                <h3 class="text-2xl font-medium mb-6">Leave a comment</h3>

                <form class="space-y-4">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <input type="text" placeholder="Your Name *" class="input input-bordered w-full" required>
                        </div>
                        <div>
                            <input type="email" placeholder="Your Email *" class="input input-bordered w-full" required>
                        </div>
                    </div>

                    <div class="flex items-center">
                        <input type="checkbox" id="save-info" class="checkbox checkbox-sm mr-2">
                        <label for="save-info" class="text-sm">Save my name, email, and website in this browser for the next time I comment.</label>
                    </div>

                    <div>
                        <textarea placeholder="Your Comment *" class="textarea textarea-bordered w-full h-32" required></textarea>
                    </div>

                    <div class="flex items-center">
                        <input type="checkbox" id="agree" class="checkbox checkbox-sm mr-2" required>
                        <label for="agree" class="text-sm">I agree that my submitted data is being collected and stored.</label>
                    </div>

                    <div>
                        <button type="submit" class="btn bg-[#b78d3d] border-none text-white">Leave a comment</button>
                    </div>
                </form>
            </div>
        </div>
    </main>

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
