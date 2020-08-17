<!doctype html>
<html lang="en-US">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, minimum-scale=1, maximum-scale=1">
    <title>Blogs</title>

    <!-- STYLESHEET -->
    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,600,700,800" rel="stylesheet">

    <!-- icon -->
    <link rel="stylesheet" href="<?= base_url("resource/fonts/icons/main/mainfont/style.css");?>">
    <link rel="stylesheet" href="<?= base_url("resource/fonts/icons/font-awesome/css/font-awesome.min.css");?>">

    <!-- Vendor -->
    <link rel="stylesheet" href="<?= base_url("resource/vendor/bootstrap/v3/bootstrap.min.css");?>">
    <link rel="stylesheet" href="<?= base_url("resource/vendor/bootstrap/v4/bootstrap-grid.css");?>">
    <!-- Custom -->
    <link rel="stylesheet" href="<?= base_url("resource/css/style.css");?>">
</head>
<body>
    <!-- HEADER -->
    <header>
        <div class="header js-header js-dropdown">
            <div class="container">
                <div class="header__logo">
                    <h1>
                        <img src="fonts/icons/main/Logo_Forum.svg" alt="logo">
                    </h1>
                    <div class="header__logo-btn" data-dropdown-btn="logo">
                        Unity<i class="icon-Arrow_Below"></i>
                    </div>
                    <nav class="dropdown dropdown--design-01" data-dropdown-list="logo">
                        <ul class="dropdown__catalog">
                            <li><a href="index-2.html">Home Page</a></li>
                            <li><a href="single-topic.html">Single Topic Page</a></li>
                            <li><a href="simple-signup.html">Sign up Page</a></li>
                            <li><a href="create-topic.html">Create Topic Page</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="header__search">
                    <form action="#">
                        <label>
                            <i class="icon-Search js-header-search-btn-open"></i>
                            <input type="search" placeholder="Search all forums" class="form-control">
                        </label>
                    </form>
                    <div class="header__search-close js-header-search-btn-close"><i class="icon-Cancel"></i></div>
                    <div class="header__search-btn" data-dropdown-btn="search">
                        Topics<i class="icon-Arrow_Below"></i>
                    </div>
                    <div class="dropdown dropdown--design-01" data-dropdown-list="search">
                        <ul>
                            <li>
                                <label>
                                    <label class="custom-checkbox">
                                        <input type="checkbox" checked="checked">
                                        <i></i>
                                    </label>Search Titles Only
                                </label>

                            </li>
                            <li>
                                <label>
                                    <label class="custom-checkbox">
                                        <input type="checkbox">
                                        <i></i>
                                    </label>Show Results as Posts
                                </label>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="icon-Advanced_Search"></i>Advanced Search
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="header__menu">
                    <div class="header__menu-btn" data-dropdown-btn="menu">
                        Latest Topics<i class="icon-Menu_Icon"></i>
                    </div>
                    <nav class="dropdown dropdown--design-01" data-dropdown-list="menu">
                        <div>
                            <ul class="dropdown__catalog row">
                                <li class="col-xs-6"><a href="#">New</a></li>
                                <li class="col-xs-6"><a href="#">Unread</a></li>
                                <li class="col-xs-6"><a href="#">Groups</a></li>
                                <li class="col-xs-6"><a href="#">Users</a></li>
                                <li class="col-xs-6"><a href="#">Tags</a></li>
                                <li class="col-xs-6"><a href="#">Shortcuts</a></li>
                            </ul>
                        </div>
                        <div>
                            <h3>Categories</h3>
                            <ul class="dropdown__catalog row">
                                <li class="col-xs-6"><a href="#" class="category"><i class="bg-f9bc64"></i>Hobbies</a></li>
                                <li class="col-xs-6"><a href="#" class="category"><i class="bg-348aa7"></i>Social</a></li>
                                <li class="col-xs-6"><a href="#" class="category"><i class="bg-4436f8"></i>Video</a></li>
                                <li class="col-xs-6"><a href="#" class="category"><i class="bg-5dd39e"></i>Random</a></li>
                                <li class="col-xs-6"><a href="#" class="category"><i class="bg-ff755a"></i>Arts</a></li>
                                <li class="col-xs-6"><a href="#" class="category"><i class="bg-bce784"></i>Tech</a></li>
                                <li class="col-xs-6"><a href="#" class="category"><i class="bg-83253f"></i>Gaming</a></li>
                                <li class="col-xs-6"><a href="#" class="category"><i class="bg-c49bbb"></i>Science</a></li>
                                <li class="col-xs-6"><a href="#" class="category"><i class="bg-3ebafa"></i>Exchange</a></li>
                                <li class="col-xs-6"><a href="#" class="category"><i class="bg-c6b38e"></i>Pets</a></li>
                                <li class="col-xs-6"><a href="#" class="category"><i class="bg-a7cdbd"></i>Entertainment</a></li>
                                <li class="col-xs-6"><a href="#" class="category"><i class="bg-525252"></i>Education</a></li>
                                <li class="col-xs-6"><a href="#" class="category"><i class="bg-777da7"></i>Q&amp;As</a></li>
                                <li class="col-xs-6"><a href="#" class="category"><i class="bg-368f8b"></i>Politics</a></li>
                            </ul>
                        </div>
                        <div>
                            <ul class="dropdown__catalog row">
                                <li class="col-xs-6"><a href="#">Support</a></li>
                                <li class="col-xs-6"><a href="#">Forum Rules</a></li>
                                <li class="col-xs-6"><a href="#">Blog</a></li>
                                <li class="col-xs-6"><a href="#">About</a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
                <div class="header__notification">
                    <div class="header__notification-btn" data-dropdown-btn="notification">
                        <i class="icon-Notification"></i>
                        <span>6</span>
                    </div>
                    <div class="dropdown dropdown--design-01" data-dropdown-list="notification">
                        <div>
                            <a href="#">
                                <i class="icon-Favorite_Topic"></i>
                                <p>Roswell . 16 feb, 17<span>Which movie have you watched recently?</span></p>
                            </a>
                            <a href="#">
                                <i class="icon-Reply_Empty"></i>
                                <p>Callis . 18 feb, 17<span>I got an amzon thingie!</span></p>
                            </a>
                            <a href="#">
                                <i class="icon-Badge"></i>
                                <p>Earned Badge . 19 feb, 17<span><img src="fonts/icons/badges/Lets_talk.svg" alt="Lets Talk">Lets Talk</span></p>
                            </a>
                            <a href="#">
                                <i class="icon-Badge"></i>
                                <p>Earned Badge . 21 feb, 17<span><img src="fonts/icons/badges/Intermediate.svg" alt="Intermediate">Intermediate</span></p>
                            </a>
                            <a href="#">
                                <i class="icon-Share_Topic"></i>
                                <p>Charlie . 22 feb, 17<span>Need Video file of that cat.</span></p>
                            </a>
                            <a href="#">
                                <i class="icon-Pencil"></i>
                                <p>Greentea . 22 feb, 17<span>New Facebook like and share button.</span></p>
                            </a>
                            <span><a href="#">view older notifications...</a></span>
                        </div>
                    </div>
                </div>
                <div class="header__user">
                    <div class="header__user-btn" data-dropdown-btn="user">
                        <img src="fonts/icons/avatars/A.svg" alt="avatar">
                        azyrusmax<i class="icon-Arrow_Below"></i>
                    </div>
                    <nav class="dropdown dropdown--design-01" data-dropdown-list="user">
                        <div>
                            <div class="dropdown__icons">
                                <a href="#"><i class="icon-Bookmark"></i></a>
                                <a href="#"><i class="icon-Message"></i></a>
                                <a href="#"><i class="icon-Preferences"></i></a>
                                <a href="#"><i class="icon-Logout"></i></a>
                            </div>
                        </div>
                        <div>
                            <ul class="dropdown__catalog">
                                <li><a href="#">Dashboard</a></li>
                                <li><a href="#">Badges</a></li>
                                <li><a href="#">My Groups</a></li>
                                <li><a href="#">Notifications</a></li>
                                <li><a href="#">Topics</a></li>
                                <li><a href="#">Likes</a></li>
                                <li><a href="#">Solved</a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
            <div class="header__offset-btn">
                <a href="create-topic.html"><img src="fonts/icons/main/New_Topic.svg" alt="New Topic"></a>
            </div>
        </div>
    </header>

    <!-- MAIN -->
    <main>
        <div class="container">
            <div class="nav">
                <div class="nav__categories js-dropdown">
                    <div class="nav__select">
                        <div class="btn-select" data-dropdown-btn="categories">All Categories</div>
                        <nav class="dropdown dropdown--design-01" data-dropdown-list="categories">
                            <ul class="dropdown__catalog row">
                                <li class="col-xs-6"><a href="#" class="category"><i class="bg-f9bc64"></i>Hobbies</a></li>
                                <li class="col-xs-6"><a href="#" class="category"><i class="bg-348aa7"></i>Social</a></li>
                                <li class="col-xs-6"><a href="#" class="category"><i class="bg-4436f8"></i>Video</a></li>
                                <li class="col-xs-6"><a href="#" class="category"><i class="bg-5dd39e"></i>Random</a></li>
                                <li class="col-xs-6"><a href="#" class="category"><i class="bg-ff755a"></i>Arts</a></li>
                                <li class="col-xs-6"><a href="#" class="category"><i class="bg-bce784"></i>Tech</a></li>
                                <li class="col-xs-6"><a href="#" class="category"><i class="bg-83253f"></i>Gaming</a></li>
                                <li class="col-xs-6"><a href="#" class="category"><i class="bg-c49bbb"></i>Science</a></li>
                                <li class="col-xs-6"><a href="#" class="category"><i class="bg-3ebafa"></i>Exchange</a></li>
                                <li class="col-xs-6"><a href="#" class="category"><i class="bg-c6b38e"></i>Pets</a></li>
                                <li class="col-xs-6"><a href="#" class="category"><i class="bg-a7cdbd"></i>Entertainment</a></li>
                                <li class="col-xs-6"><a href="#" class="category"><i class="bg-525252"></i>Education</a></li>
                                <li class="col-xs-6"><a href="#" class="category"><i class="bg-777da7"></i>Q&amp;As</a></li>
                                <li class="col-xs-6"><a href="#" class="category"><i class="bg-368f8b"></i>Politics</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="nav__select">
                        <div class="btn-select" data-dropdown-btn="tags">Tags</div>
                        <div class="dropdown dropdown--design-01" data-dropdown-list="tags">
                            <div class="tags">
                                <a href="#" class="bg-4f80b0">gaming</a>
                                <a href="#" class="bg-424ee8">nature</a>
                                <a href="#" class="bg-36b7d7">entertainment</a>
                                <a href="#" class="bg-ef429e">selfie</a>
                                <a href="#" class="bg-7cc576">camera</a>
                                <a href="#" class="bg-3a3a17">username</a>
                                <a href="#" class="bg-6f7e9c">funny</a>
                                <a href="#" class="bg-f26522">photography</a>
                                <a href="#" class="bg-a3d39c">climbing</a>
                                <a href="#" class="bg-92278f">adventure</a>
                                <a href="#" class="bg-8781bd">dreams</a>
                                <a href="#" class="bg-f1ab32">life</a>
                                <a href="#" class="bg-3b96ca">reason</a>
                                <a href="#" class="bg-348aa7">social</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="nav__menu js-dropdown">
                    <div class="nav__select">
                        <div class="btn-select" data-dropdown-btn="menu">Latest</div>
                        <div class="dropdown dropdown--design-01" data-dropdown-list="menu">
                            <ul class="dropdown__catalog">
                                <li><a href="#">Latest</a></li>
                                <li><a href="#">Unread</a></li>
                                <li><a href="#">Rising</a></li>
                                <li><a href="#">Most Liked</a></li>
                                <li><a href="#">Follow Feed</a></li>
                            </ul>
                        </div>
                    </div>
                    <ul>
                        <li class="active"><a href="#">Latest</a></li>
                        <li><a href="#">Unread</a></li>
                        <li><a href="#">Rising</a></li>
                        <li><a href="#">Most Liked</a></li>
                        <li><a href="#">Follow Feed</a></li>
                    </ul>
                </div>
            </div>
            <div class="posts">
                <div class="posts__head">
                    <div class="posts__topic">Topic</div>
                    <div class="posts__category">Category</div>
                    <div class="posts__users">Users</div>
                    <div class="posts__replies">Replies</div>
                    <div class="posts__views">Views</div>
                    <div class="posts__activity">Activity</div>
                </div>
                <div class="posts__body">
                    <div class="posts__item bg-fef2e0">
                        <div class="posts__section-left">
                            <div class="posts__topic">
                                <div class="posts__content">
                                    <a href="#">
                                        <h3><i><img src="fonts/icons/main/Pinned.svg" alt="Pinned"></i>Welcome New Users! Please read this before posting!</h3>
                                    </a>
                                    <p>Congratulations, you have found the Community! Before you make a new topic or post, please read community guidelines.</p>
                                </div>
                            </div>
                        </div>
                        <div class="posts__section-right">
                            <div class="posts__users js-dropdown">
                                <div>
                                    <a href="#" class="avatar"><img src="fonts/icons/avatars/B.svg" alt="avatar" data-dropdown-btn="user-b"></a>
                                    <div class="posts__users-dropdown dropdown dropdown--user dropdown--reverse-y" data-dropdown-list="user-b">
                                        <div class="dropdown__user">
                                            <a href="#" class="dropdown__user-label bg-218380">B</a>
                                            <div class="dropdown__user-nav">
                                                <a href="#"><i class="icon-Add_User"></i></a>
                                                <a href="#"><i class="icon-Message"></i></a>
                                            </div>
                                            <div class="dropdown__user-info">
                                                <a href="#">Tesla Motors</a>
                                                <p>Last post 4 hours ago. Joined Jun 1, 16</p>
                                            </div>
                                            <div class="dropdown__user-icons">
                                                <a href="#"><img src="fonts/icons/badges/Intermediate.svg" alt="user-icon"></a>
                                                <a href="#"><img src="fonts/icons/badges/Bot.svg" alt="user-icon"></a>
                                                <a href="#"><img src="fonts/icons/badges/Animal_Lover.svg" alt="user-icon"></a>
                                            </div>
                                            <div class="dropdown__user-statistic">
                                                <div>Threads - <span>1184</span></div>
                                                <div>Posts - <span>5,863</span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <a href="#" class="avatar"><img src="fonts/icons/avatars/K.svg" alt="avatar"></a>
                                </div>
                                <div>
                                    <a href="#" class="avatar"><img src="fonts/icons/avatars/O.svg" alt="avatar"></a>
                                </div>
                            </div>
                            <div class="posts__replies">66</div>
                            <div class="posts__views">15.1k</div>
                            <div class="posts__activity">11d</div>
                        </div>
                    </div>
                    <div class="posts__item">
                        <div class="posts__section-left">
                            <div class="posts__topic">
                                <div class="posts__content">
                                    <a href="#">
                                        <h3>Current news and discussion</h3>
                                    </a>
                                </div>
                            </div>
                            <div class="posts__category"><a href="#" class="category"><i class="bg-368f8b"></i>Politics</a></div>
                        </div>
                        <div class="posts__section-right">
                            <div class="posts__users">
                                <div>
                                    <a href="#" class="avatar"><img src="fonts/icons/avatars/A.svg" alt="avatar"></a>
                                </div>
                                <div>
                                    <a href="#" class="avatar"><img src="fonts/icons/avatars/G.svg" alt="avatar"></a>
                                </div>
                                <div>
                                    <a href="#" class="avatar"><img src="fonts/icons/avatars/P.svg" alt="avatar"></a>
                                </div>
                            </div>
                            <div class="posts__replies">31</div>
                            <div class="posts__views">14.5k</div>
                            <div class="posts__activity">13d</div>
                        </div>
                    </div>
                    <div class="posts__item bg-f2f4f6">
                        <div class="posts__section-left">
                            <div class="posts__topic">
                                <div class="posts__content">
                                    <a href="#">
                                        <h3>Get your username drawn by the other users of unity! or a drawing based on what you do</h3>
                                    </a>
                                    <div class="posts__tags tags">
                                        <a href="#" class="bg-4f80b0">gaming</a>
                                        <a href="#" class="bg-424ee8">nature</a>
                                        <a href="#" class="bg-36b7d7">entertainment</a>
                                    </div>
                                </div>
                            </div>
                            <div class="posts__category"><a href="#" class="category"><i class="bg-4436f8"></i>Video</a></div>
                        </div>
                        <div class="posts__section-right">
                            <div class="posts__users">
                                <div>
                                    <a href="#" class="avatar"><img src="fonts/icons/avatars/L.svg" alt="avatar"></a>
                                </div>
                                <div>
                                    <a href="#" class="avatar"><img src="fonts/icons/avatars/T.svg" alt="avatar"></a>
                                </div>
                            </div>
                            <div class="posts__replies">252</div>
                            <div class="posts__views">396</div>
                            <div class="posts__activity">13m</div>
                        </div>
                    </div>
                    <div class="posts__item">
                        <div class="posts__section-left">
                            <div class="posts__topic">
                                <div class="posts__content">
                                    <a href="#">
                                        <h3>Which movie have you watched most recently?</h3>
                                    </a>
                                </div>
                            </div>
                            <div class="posts__category"><a href="#" class="category"><i class="bg-3ebafa"></i> Exchange</a></div>
                        </div>
                        <div class="posts__section-right">
                            <div class="posts__users">
                                <div>
                                    <a href="#" class="avatar"><img src="fonts/icons/avatars/E.svg" alt="avatar"></a>
                                </div>
                                <div>
                                    <a href="#" class="avatar"><img src="fonts/icons/avatars/I.svg" alt="avatar"></a>
                                </div>
                                <div>
                                    <a href="#" class="avatar"><img src="fonts/icons/avatars/R.svg" alt="avatar"></a>
                                </div>
                            </div>
                            <div class="posts__replies">207</div>
                            <div class="posts__views">7.5k</div>
                            <div class="posts__activity">41m</div>
                        </div>
                    </div>
                    <div class="posts__item posts__item--bg-gradient">
                        <div class="posts__section-left">
                            <div class="posts__topic">
                                <div class="posts__content">
                                    <a href="#">
                                        <h3><span>This post contails spoiler about</span> Star Wars Movie.</h3>
                                    </a>
                                </div>
                            </div>
                            <div class="posts__category"><a href="#" class="category"><i class="bg-777da7"></i> Q&amp;As</a></div>
                        </div>
                        <div class="posts__section-right">
                            <div class="posts__users">
                                <div>
                                    <a href="#" class="avatar"><img src="fonts/icons/avatars/F.svg" alt="avatar"></a>
                                </div>
                            </div>
                            <div class="posts__replies">2.3k</div>
                            <div class="posts__views">2.0k</div>
                            <div class="posts__activity">1h</div>
                        </div>
                    </div>
                    <div class="posts__item">
                        <div class="posts__section-left">
                            <div class="posts__topic">
                                <div class="posts__content">
                                    <a href="#">
                                        <h3>Take a picture of what you’re doing at this very moment</h3>
                                    </a>
                                    <div class="posts__tags tags">
                                        <a href="#" class="bg-ec008c">selfie</a>
                                        <a href="#" class="bg-7cc576">camera</a>
                                    </div>
                                </div>
                            </div>
                            <div class="posts__category"><a href="#" class="category"><i class="bg-c6b38e"></i> Pets</a></div>
                        </div>
                        <div class="posts__section-right">
                            <div class="posts__users">
                                <div>
                                    <a href="#" class="avatar"><img src="fonts/icons/avatars/C.svg" alt="avatar"></a>
                                </div>
                                <div>
                                    <a href="#" class="avatar"><img src="fonts/icons/avatars/U.svg" alt="avatar"></a>
                                </div>
                                <div>
                                    <a href="#" class="avatar"><img src="fonts/icons/avatars/I.svg" alt="avatar"></a>
                                </div>
                            </div>
                            <div class="posts__replies">441</div>
                            <div class="posts__views">3.1k</div>
                            <div class="posts__activity">6h</div>
                        </div>
                    </div>
                    <div class="posts__item bg-f2f4f6">
                        <div class="posts__section-left">
                            <div class="posts__topic">
                                <div class="posts__content">
                                    <a href="#">
                                        <h3>Name Generator/Pick-n-Choose Nonsense</h3>
                                    </a>
                                    <div class="posts__tags tags">
                                        <a href="#" class="bg-3a3a17">username</a>
                                        <a href="#" class="bg-6f7e9c">funny</a>
                                    </div>
                                </div>
                            </div>
                            <div class="posts__category"><a href="#" class="category"><i class="bg-525252"></i> Education</a></div>
                        </div>
                        <div class="posts__section-right">
                            <div class="posts__users">
                                <div>
                                    <a href="#" class="avatar"><img src="fonts/icons/avatars/K.svg" alt="avatar"></a>
                                </div>
                                <div>
                                    <a href="#" class="avatar"><img src="fonts/icons/avatars/N.svg" alt="avatar"></a>
                                </div>
                                <div>
                                    <a href="#" class="avatar"><img src="fonts/icons/avatars/Q.svg" alt="avatar"></a>
                                </div>
                            </div>
                            <div class="posts__replies">1.3k</div>
                            <div class="posts__views">6.0k</div>
                            <div class="posts__activity">7h</div>
                        </div>
                    </div>
                    <div class="posts__item">
                        <div class="posts__section-left">
                            <div class="posts__topic">
                                <div class="posts__content">
                                    <a href="#">
                                        <h3><i class="icon-Locked"></i>I got an Amazon thingie!</h3>
                                    </a>
                                </div>
                            </div>
                            <div class="posts__category"><a href="#" class="category"><i class="bg-bce784"></i> Tech</a></div>
                        </div>
                        <div class="posts__section-right">
                            <div class="posts__users">
                                <div>
                                    <a href="#" class="avatar"><img src="fonts/icons/avatars/C.svg" alt="avatar"></a>
                                </div>
                                <div>
                                    <a href="#" class="avatar"><img src="fonts/icons/avatars/W.svg" alt="avatar"></a>
                                </div>
                                <div>
                                    <a href="#" class="avatar"><img src="fonts/icons/avatars/Y.svg" alt="avatar"></a>
                                </div>
                            </div>
                            <div class="posts__replies">5.7k</div>
                            <div class="posts__views">33.6k</div>
                            <div class="posts__activity">13h</div>
                        </div>
                    </div>
                    <div class="posts__item bg-f2f4f6">
                        <div class="posts__section-left">
                            <div class="posts__topic">
                                <div class="posts__content">
                                    <a href="#">
                                        <h3>Post the weirdest thing you own here!</h3>
                                    </a>
                                </div>
                            </div>
                            <div class="posts__category"><a href="#" class="category"><i class="bg-525252"></i> Education</a></div>
                        </div>
                        <div class="posts__section-right">
                            <div class="posts__users">
                                <div>
                                    <a href="#" class="avatar"><img src="fonts/icons/avatars/D.svg" alt="avatar"></a>
                                </div>
                                <div>
                                    <a href="#" class="avatar"><img src="fonts/icons/avatars/M.svg" alt="avatar"></a>
                                </div>
                                <div>
                                    <a href="#" class="avatar"><img src="fonts/icons/avatars/R.svg" alt="avatar"></a>
                                </div>
                            </div>
                            <div class="posts__replies">236</div>
                            <div class="posts__views">2.3k</div>
                            <div class="posts__activity">10h</div>
                        </div>
                    </div>
                    <div class="posts__item">
                        <div class="posts__section-left">
                            <div class="posts__topic">
                                <div class="posts__content">
                                    <a href="#">
                                        <h3>Show me your awesome photography</h3>
                                    </a>
                                    <div class="posts__tags tags">
                                        <a href="#" class="bg-f26522">photography</a>
                                    </div>
                                </div>
                            </div>
                            <div class="posts__category"><a href="#" class="category"><i class="bg-c49bbb"></i> Science</a></div>
                        </div>
                        <div class="posts__section-right">
                            <div class="posts__users js-dropdown">
                                <div>
                                    <a href="#" class="avatar"><img src="fonts/icons/avatars/E.svg" alt="avatar"></a>
                                </div>
                                <div>
                                    <a href="#" class="avatar"><img src="fonts/icons/avatars/R.svg" alt="avatar"></a>
                                </div>
                                <div>
                                    <a href="#" class="avatar"><img src="fonts/icons/avatars/T.svg" alt="avatar" data-dropdown-btn="user-t"></a>
                                    <div class="posts__users-dropdown dropdown dropdown--user dropdown--open" data-dropdown-list="user-t">
                                        <div class="dropdown__user">
                                            <a href="#" class="dropdown__user-label bg-00bd9d">T</a>
                                            <div class="dropdown__user-nav">
                                                <a href="#"><i class="icon-Add_User"></i></a>
                                                <a href="#"><i class="icon-Message"></i></a>
                                            </div>
                                            <div class="dropdown__user-info">
                                                <a href="#">Tesla Motors</a>
                                                <p>Last post 4 hours ago. Joined Jun 1, 16</p>
                                            </div>
                                            <div class="dropdown__user-icons">
                                                <a href="#"><img src="fonts/icons/badges/Intermediate.svg" alt="user-icon"></a>
                                                <a href="#"><img src="fonts/icons/badges/Bot.svg" alt="user-icon"></a>
                                                <a href="#"><img src="fonts/icons/badges/Animal_Lover.svg" alt="user-icon"></a>
                                            </div>
                                            <div class="dropdown__user-statistic">
                                                <div>Threads - <span>1184</span></div>
                                                <div>Posts - <span>5,863</span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="posts__replies">3</div>
                            <div class="posts__views">519</div>
                            <div class="posts__activity">2d</div>
                        </div>
                    </div>
                    <div class="posts__item bg-f2f4f6">
                        <div class="posts__section-left">
                            <div class="posts__topic">
                                <div class="posts__content">
                                    <a href="#">
                                        <h3>GAMERS UNITE! What games do the Unity Community play?</h3>
                                    </a>
                                </div>
                            </div>
                            <div class="posts__category"><a href="#" class="category"><i class="bg-5dd39e"></i> Random</a></div>
                        </div>
                        <div class="posts__section-right">
                            <div class="posts__users">
                                <div>
                                    <a href="#" class="avatar"><img src="fonts/icons/avatars/H.svg" alt="avatar"></a>
                                </div>
                                <div>
                                    <a href="#" class="avatar"><img src="fonts/icons/avatars/M.svg" alt="avatar"></a>
                                </div>
                                <div>
                                    <a href="#" class="avatar"><img src="fonts/icons/avatars/Y.svg" alt="avatar"></a>
                                </div>
                            </div>
                            <div class="posts__replies">60</div>
                            <div class="posts__views">891</div>
                            <div class="posts__activity">1h</div>
                        </div>
                    </div>
                    <div class="posts__item">
                        <div class="posts__section-left">
                            <div class="posts__topic">
                                <div class="posts__content">
                                    <a href="#">
                                        <h3>Take a virtual tour of the world’s creepiest basement!</h3>
                                    </a>
                                </div>
                            </div>
                            <div class="posts__category"><a href="#" class="category"><i class="bg-83253f"></i> Gaming</a></div>
                        </div>
                        <div class="posts__section-right">
                            <div class="posts__users">
                                <div>
                                    <a href="#" class="avatar"><img src="fonts/icons/avatars/L.svg" alt="avatar"></a>
                                </div>
                                <div>
                                    <a href="#" class="avatar"><img src="fonts/icons/avatars/A.svg" alt="avatar"></a>
                                </div>
                            </div>
                            <div class="posts__replies">587</div>
                            <div class="posts__views">3.8k</div>
                            <div class="posts__activity">3d</div>
                        </div>
                    </div>
                    <div class="posts__item bg-f2f4f6">
                        <div class="posts__section-left">
                            <div class="posts__topic">
                                <div class="posts__content">
                                    <a href="#">
                                        <h3>Climbing Mount Borah in centeral Idaho</h3>
                                    </a>
                                    <div class="posts__tags tags">
                                        <a href="#" class="bg-a3d39c">climbing</a>
                                        <a href="#" class="bg-6f7e9c">funny</a>
                                        <a href="#" class="bg-92278f">adventure</a>
                                    </div>
                                </div>
                            </div>
                            <div class="posts__category"><a href="#" class="category"><i class="bg-a7cdbd"></i> Entertainment</a></div>
                        </div>
                        <div class="posts__section-right">
                            <div class="posts__users">
                                <div>
                                    <a href="#" class="avatar"><img src="fonts/icons/avatars/I.svg" alt="avatar"></a>
                                </div>
                                <div>
                                    <a href="#" class="avatar"><img src="fonts/icons/avatars/O.svg" alt="avatar"></a>
                                </div>
                                <div>
                                    <a href="#" class="avatar"><img src="fonts/icons/avatars/S.svg" alt="avatar"></a>
                                </div>
                            </div>
                            <div class="posts__replies">628</div>
                            <div class="posts__views">997</div>
                            <div class="posts__activity">1h</div>
                        </div>
                    </div>
                    <div class="posts__item">
                        <div class="posts__section-left">
                            <div class="posts__topic">
                                <div class="posts__content">
                                    <a href="#">
                                        <h3>Post your artwork!</h3>
                                    </a>
                                </div>
                            </div>
                            <div class="posts__category"><a href="#" class="category"><i class="bg-c6b38e"></i> Pets</a></div>
                        </div>
                        <div class="posts__section-right">
                            <div class="posts__users">
                                <div>
                                    <a href="#" class="avatar"><img src="fonts/icons/avatars/S.svg" alt="avatar"></a>
                                </div>
                                <div>
                                    <a href="#" class="avatar"><img src="fonts/icons/avatars/G.svg" alt="avatar"></a>
                                </div>
                            </div>
                            <div class="posts__replies">147</div>
                            <div class="posts__views">397</div>
                            <div class="posts__activity">3h</div>
                        </div>
                    </div>
                    <div class="posts__item bg-f2f4f6">
                        <div class="posts__section-left">
                            <div class="posts__topic">
                                <div class="posts__content">
                                    <a href="#">
                                        <h3>Who’s playing Overwatch?</h3>
                                    </a>
                                </div>
                            </div>
                            <div class="posts__category"><a href="#" class="category"><i class="bg-ff755a"></i> Arts</a></div>
                        </div>
                        <div class="posts__section-right">
                            <div class="posts__users">
                                <div>
                                    <a href="#" class="avatar"><img src="fonts/icons/avatars/K.svg" alt="avatar"></a>
                                </div>
                                <div>
                                    <a href="#" class="avatar"><img src="fonts/icons/avatars/L.svg" alt="avatar"></a>
                                </div>
                                <div>
                                    <a href="#" class="avatar"><img src="fonts/icons/avatars/R.svg" alt="avatar"></a>
                                </div>
                            </div>
                            <div class="posts__replies">274</div>
                            <div class="posts__views">2.9k</div>
                            <div class="posts__activity">1d</div>
                        </div>
                    </div>
                    <div class="posts__item">
                        <div class="posts__section-left">
                            <div class="posts__topic">
                                <div class="posts__content">
                                    <a href="#">
                                        <h3>Tell me about your recent dream</h3>
                                    </a>
                                </div>
                            </div>
                            <div class="posts__category"><a href="#" class="category"><i class="bg-f9bc64"></i> Hobbies</a></div>
                        </div>
                        <div class="posts__section-right">
                            <div class="posts__users">
                                <div>
                                    <a href="#" class="avatar"><img src="fonts/icons/avatars/N.svg" alt="avatar"></a>
                                </div>
                                <div>
                                    <a href="#" class="avatar"><img src="fonts/icons/avatars/H.svg" alt="avatar"></a>
                                </div>
                            </div>
                            <div class="posts__replies">0</div>
                            <div class="posts__views">2.9k</div>
                            <div class="posts__activity">1d</div>
                        </div>
                    </div>
                    <div class="posts__item bg-f2f4f6">
                        <div class="posts__section-left">
                            <div class="posts__topic">
                                <div class="posts__content">
                                    <a href="#">
                                        <h3>A thread in which you tell users to go to sleep</h3>
                                    </a>
                                    <div class="posts__tags tags">
                                        <a href="#" class="bg-8781bd">dreams</a>
                                        <a href="#" class="bg-f1ab32">life</a>
                                        <a href="#" class="bg-3b96ca">reason</a>
                                        <a href="#" class="bg-348aa7">social</a>
                                    </div>
                                </div>
                            </div>
                            <div class="posts__category"><a href="#" class="category"><i class="bg-348aa7"></i> Social</a></div>
                        </div>
                        <div class="posts__section-right">
                            <div class="posts__users">
                                <div>
                                    <a href="#" class="avatar"><img src="fonts/icons/avatars/J.svg" alt="avatar"></a>
                                </div>
                                <div>
                                    <a href="#" class="avatar"><img src="fonts/icons/avatars/D.svg" alt="avatar"></a>
                                </div>
                                <div>
                                    <a href="#" class="avatar"><img src="fonts/icons/avatars/Q.svg" alt="avatar"></a>
                                </div>
                            </div>
                            <div class="posts__replies">129</div>
                            <div class="posts__views">752</div>
                            <div class="posts__activity">19m</div>
                        </div>
                    </div>
                    <div class="posts__item">
                        <div class="posts__section-left">
                            <div class="posts__topic">
                                <div class="posts__content">
                                    <a href="#">
                                        <h3>What’s everyone drinking?</h3>
                                    </a>
                                </div>
                            </div>
                            <div class="posts__category"><a href="#" class="category"><i class="bg-5dd39e"></i> Random</a></div>
                        </div>
                        <div class="posts__section-right">
                            <div class="posts__users">
                                <div>
                                    <a href="#" class="avatar"><img src="fonts/icons/avatars/B.svg" alt="avatar"></a>
                                </div>
                                <div>
                                    <a href="#" class="avatar"><img src="fonts/icons/avatars/M.svg" alt="avatar"></a>
                                </div>
                                <div>
                                    <a href="#" class="avatar"><img src="fonts/icons/avatars/Z.svg" alt="avatar"></a>
                                </div>
                            </div>
                            <div class="posts__replies">305</div>
                            <div class="posts__views">2.1k</div>
                            <div class="posts__activity">6m</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- FOOTER -->
    <footer>
        <div class="footer js-dropdown">
            <div class="container">
                <div class="footer__logo">
                    <div>
                        <img src="fonts/icons/main/Logo_Forum.svg" alt="logo">Unity
                    </div>
                </div>
                <div class="footer__nav">
                    <div class="footer__tline">
                        <i class="icon-Support"></i>
                        <ul class="footer__menu">
                            <li><a href="#">Support</a></li>
                            <li><a href="#">About</a></li>
                            <li><a href="#">Contact Us</a></li>
                            <li><a href="#">The Team</a></li>
                        </ul>
                        <div class="footer__language">
                            <div class="footer__language-btn" data-dropdown-btn="language">Americas - English<i class="icon-Arrow_Below"></i></div>
                            <div class="footer__language-dropdown dropdown dropdown--design-01 dropdown--reverse-y" data-dropdown-list="language">
                                <div class="row">
                                    <div class="col-xs-6">
                                        <h3>Region</h3>
                                        <ul class="dropdown__catalog">
                                            <li class="active"><a href="#"><i></i>America</a></li>
                                            <li><a href="#"><i></i>Europe</a></li>
                                            <li><a href="#"><i></i>Asia</a></li>
                                            <li><a href="#"><i></i>China</a></li>
                                            <li><a href="#"><i></i>Australia</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-xs-6">
                                        <h3>Language</h3>
                                        <ul class="dropdown__catalog">
                                            <li class="active"><a href="#"><i></i>English</a></li>
                                            <li><a href="#"><i></i>Espanol</a></li>
                                            <li><a href="#"><i></i>Portugues</a></li>
                                            <li><a href="#"><i></i>Chinese</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="footer__bline">
                        <ul class="footer__menu">
                            <li class="footer__copyright"><span>&copy; 2017 azyrusthemes.com</span></li>
                            <li><a href="#">Teams</a></li>
                            <li><a href="#">Privacy</a></li>
                            <li><a href="#">Send Feedback</a></li>
                        </ul>
                        <ul class="footer__social">
                            <li><a href="#"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-cloud" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-rss" aria-hidden="true"></i></a></li>
                        </ul>
                        <div class="footer__language-btn-m" data-dropdown-btn="language">Americas - English<i class="icon-Arrow_Below"></i></div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- JAVA SCRIPT -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/velocity/velocity.min.js"></script>
    <script src="js/app.js"></script>

</body>

<!-- Mirrored from www.azyrusthemes.com/forum2/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 07 Aug 2020 10:37:33 GMT -->
</html>