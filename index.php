<?php
// PHP initialization and variables

// ট্রেন্ডিং কীওয়ার্ডগুলি - এখানে নতুন কীওয়ার্ড যোগ করলে তা অটোমেটিক্যালি সাইট কীওয়ার্ডসে যোগ হবে
$trending_keywords = [
    'borbaad',
    'jongli',
    'Bachelor Point 5',
    'Daagi',
    'Chokkor 302',
    'taandob',
    // নতুন কীওয়ার্ড এখানে যোগ করুন
];

// Site metadata
$site_title = "FlixBD - Your Ultimate Movie Destination";
$site_description = "FlixBD offers the latest Bangla movies, dual audio films, dubbed content, and 18+ movies. Download high-quality movies for free from FlixBD.net, FlixBD.my, FlixBD.xyz, and FlixBD.shop.";

// Base keywords
$base_keywords = "FlixBD, Bangla movies, dual audio movies, dubbed movies, Korean drama, Chinese drama, 18+ movies, movie download, free movies, FlixBD.net, FlixBD.my, FlixBD.xyz, FlixBD.shop";

// Combine base keywords with trending keywords
$site_keywords = $base_keywords;
foreach ($trending_keywords as $keyword) {
    $site_keywords .= ", " . $keyword;
}
?>
<!DOCTYPE html>
<html lang="bn">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $site_title; ?></title>
    <meta name="description" content="<?php echo $site_description; ?>">
    <meta name="keywords" content="<?php echo $site_keywords; ?>">
    
    <!-- Favicon -->
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="flixbd.png">
    
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://flixbd.net/">
    <meta property="og:title" content="<?php echo $site_title; ?>">
    <meta property="og:description" content="<?php echo $site_description; ?>">
    <meta property="og:image" content="https://flixbd.net/flixbd.png">
    
    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://flixbd.net/">
    <meta property="twitter:title" content="<?php echo $site_title; ?>">
    <meta property="twitter:description" content="<?php echo $site_description; ?>">
    <meta property="twitter:image" content="https://flixbd.net/flixbd.png">
    
    <!-- Canonical URL -->
    <link rel="canonical" href="https://flixbd.net/">
    
    <!-- CSS -->
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <div class="background-patterns">
        <div class="pattern-grid"></div>
        <div class="gradient-overlay-1"></div>
        <div class="gradient-overlay-2"></div>
        <div class="gradient-overlay-3"></div>
        <div class="border-top"></div>
        <div class="border-bottom"></div>
        <div class="floating-particles"></div>
    </div>
    
    <div class="container">
        <!-- Header -->
        <header>
            <h1 class="site-name">FlixBD</h1>
            <div class="search-container">
                <form action="https://flixbd.my/" method="get">
                    <input type="text" name="s" placeholder="Search for movies...">
                    <button type="submit"><i class="fas fa-search"></i> Search</button>
                </form>
            </div>
            
            <!-- Trending Keywords -->
            <div class="trending-keywords">
                <div class="trending-label">
                    <i class="fas fa-fire"></i> ট্রেন্ডিং:
                </div>
                <div class="keywords-container">
                    <?php foreach ($trending_keywords as $keyword): ?>
                    <a href="https://flixbd.my/?s=<?php echo urlencode($keyword); ?>" class="keyword-pill"><?php echo $keyword; ?></a>
                    <?php endforeach; ?>
                </div>
            </div>
        </header>

        <!-- Main Content -->
        <main>
            <!-- Site Buttons -->
            <section class="site-buttons">
                <a href="https://flixbd.xyz" class="btn gradient-btn">
                    <i class="fas fa-film"></i> FlixBD.xyz <span class="btn-subtitle">মুভি সাইট</span>
                </a>
                <a href="https://flixbd.my" class="btn gradient-btn">
                    <i class="fas fa-video"></i> FlixBD.my <span class="btn-subtitle">অফিসিয়াল সাইট</span>
                </a>
                <a href="https://flixbd.my/how-to-download-flixbd/" class="btn info-btn">
                    <i class="fas fa-download"></i> How to Download <span class="btn-subtitle">ডাউনলোড গাইড</span>
                </a>
            </section>

            <!-- Categories Section -->
            <section class="categories-section">
                <h2>মুভি ক্যাটাগরি</h2>
                
                <div class="categories-container">
                    <!-- Bangla Category -->
                    <div class="category-card">
                        <div class="category-header">
                            <h3><i class="fas fa-film"></i> বাংলা মুভি</h3>
                        </div>
                        <div class="category-content">
                            <p>বাংলাদেশী এবং কলকাতার সেরা মুভি কালেকশন</p>
                            <a href="https://flixbd.my/genre/bangla/" class="btn category-btn">
                                <i class="fas fa-eye"></i> দেখুন
                            </a>
                        </div>
                    </div>
                    
                    <!-- Dual Audio Category -->
                    <div class="category-card">
                        <div class="category-header">
                            <h3><i class="fas fa-headphones-alt"></i> ডুয়াল অডিও</h3>
                        </div>
                        <div class="category-content">
                            <p>হিন্দি ডুয়াল অডিও সহ সমস্ত মুভি</p>
                            <a href="https://flixbd.my/genre/dual-audio-hindi/" class="btn category-btn">
                                <i class="fas fa-eye"></i> দেখুন
                            </a>
                        </div>
                    </div>
                    
                    <!-- Dubbed Category -->
                    <div class="category-card">
                        <div class="category-header">
                            <h3><i class="fas fa-language"></i> ডাবড মুভি</h3>
                        </div>
                        <div class="category-content">
                            <p>বাংলা ডাবড, হিন্দি ডাবড, কোরিয়ান চাইনিজ ড্রামা</p>
                            <a href="https://flixbd.my/multi-genres/bangla-dubbed,dual-audio-hindi,hindi-dubbed/k-c-drama/" class="btn category-btn">
                                <i class="fas fa-eye"></i> দেখুন
                            </a>
                        </div>
                    </div>
                    
                    <!-- 18+ Category -->
                    <div class="category-card adult-card">
                        <div class="category-header">
                            <h3><i class="fas fa-exclamation-circle"></i> ১৮+ কন্টেন্ট</h3>
                        </div>
                        <div class="category-content">
                            <p>প্রাপ্তবয়স্কদের জন্য ভাইরাল ভিডিও এবং মুভি</p>
                            <a href="https://flixbd.my/genre/18/" class="btn category-btn adult-btn">
                                <i class="fas fa-eye"></i> দেখুন
                            </a>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Site Notice -->
            <section class="important-notice">
                <div class="notice-box">
                    <h2><i class="fas fa-exclamation-triangle"></i> FlixBD.net | আপনার মুভি হাব</h2>
                    <p>FlixBD সাইট ভিজিট করার জন্য সর্বদা FlixBD.net লিখে ভিজিট করুন</p>
                    <p class="fun-notice">
                        <span class="warning-icon">⚠️</span>
                        সাইটে কিছু এডস আসবে যা হজম করে আমাদের সাপোর্ট করবেন - আপনার ক্লিক, আমাদের টিক!
                        <span class="block-text">আমরা আপনাকে মুভি দিচ্ছি ফ্রি, আপনি শুধু এড দেখে দিন জি! 🤝</span>
                    </p>
                </div>
            </section>

            <!-- Community Section -->
            <section class="community">
                <div class="join-group">
                    <h2><i class="fab fa-telegram"></i> আজই জয়েন করুন আমাদের কমিউনিটিতে</h2>
                    <p>সবার আগে পান নতুন মুভি আপডেট, নোটিফিকেশন এবং বিশেষ অফার</p>
                    <a href="https://t.me/flixbdmovie" class="btn telegram-btn">
                        <i class="fab fa-telegram"></i> টেলিগ্রাম গ্রুপে জয়েন করুন
                    </a>
                </div>
            </section>

            <!-- FAQ Section -->
            <section class="faq">
                <h2>সাধারণ জিজ্ঞাসা</h2>
                <div class="faq-container">
                    <div class="faq-item">
                        <div class="faq-question">
                            <h3><i class="fas fa-question-circle"></i> কিভাবে মুভি ডাউনলোড করবো?</h3>
                        </div>
                        <div class="faq-answer always-show">
                            <p>আমাদের সাইট ভিজিট করুন, আপনার পছন্দের মুভি সিলেক্ট করুন, তারপর ডাউনলোড বাটনে ক্লিক করুন। বিস্তারিত জানতে "How to Download" বাটনে ক্লিক করুন।</p>
                        </div>
                    </div>
                    <div class="faq-item">
                        <div class="faq-question">
                            <h3><i class="fas fa-question-circle"></i> মুভি ডাউনলোডের সময় কোন ঝামেলা হলে কি করবো?</h3>
                        </div>
                        <div class="faq-answer always-show">
                            <p>আমাদের টেলিগ্রাম গ্রুপে জয়েন করে সমস্যা জানাতে পারেন। আমরা দ্রুত সমাধান দেওয়ার চেষ্টা করব।</p>
                        </div>
                    </div>
                    <div class="faq-item">
                        <div class="faq-question">
                            <h3><i class="fas fa-question-circle"></i> ভিডিওতে অডিও না শুনলে কি করবো?</h3>
                        </div>
                        <div class="faq-answer always-show">
                            <p>MX Player এ অডিও না শোনা গেলে MX Player Pro, VLC বা PlayIt Player ব্যবহার করুন। এই প্লেয়ারগুলো সব ধরনের অডিও কোডেক সাপোর্ট করে।</p>
                        </div>
                    </div>
                </div>
            </section>
        </main>

        <!-- Footer -->
        <footer>
            <p>&copy; <?php echo date('Y'); ?> FlixBD - আপনার প্রিয় মুভি হাব</p>
        </footer>
    </div>

    <!-- Structured Data for SEO -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "WebSite",
        "name": "FlixBD",
        "url": "https://flixbd.net/",
        "potentialAction": {
            "@type": "SearchAction",
            "target": "https://flixbd.my/?s={search_term_string}",
            "query-input": "required name=search_term_string"
        },
        "sameAs": [
            "https://flixbd.my/",
            "https://flixbd.xyz/",
            "https://flixbd.shop/"
        ]
    }
    </script>
    
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Organization",
        "name": "FlixBD",
        "url": "https://flixbd.net/",
        "logo": "https://flixbd.net/flixbd.png",
        "description": "FlixBD offers the latest Bangla movies, dual audio films, dubbed content, and 18+ movies. Download high-quality movies for free."
    }
    </script>

    <script src="index.js"></script>
</body>
</html> 