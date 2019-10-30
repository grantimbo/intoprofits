<?php /* Template Name: Home */ get_header(); ?>


<section class="home-feature-graph">
    <div class="v-graph-wrap">
        <video autoplay muted loop>
			<source src="<?php echo get_template_directory_uri(); ?>/videos/graph.mp4" type="video/mp4">
			<source src="<?php echo get_template_directory_uri(); ?>/videos/graph.ogg" type="video/ogg">
		</video>
    </div>
    <div class="v-graph-overlay"></div>
    <div class="wrap">
        <div class="v-graph-content">
        	<?php if (have_posts()): while (have_posts()) : the_post(); ?>
	            <?php the_content(); ?>
            <?php endwhile; endif; ?>
        </div>
        <div class="v-graph-button">
            <a href="https://intoprofits.com/case-study" class="btn-seehow"><span>See How</span></a>
        </div>
    </div>
</section>

<section class="home-features-title">
    <div class="wrap">
        <h1>Do Less - And Do It Better Than Anyone Else.</h1>
        <p>It’s not about doing more stuff. It’s about doing more of what works and doing it better. Growing a wildly profitable business on Amazon is a game of efficiency and sophistication.</p>
        <p>Success comes down to mastering four core areas.</p>
    </div>
</section>

<section class="home-features">
    <div class="wrap clear">
        <article>
            <h1>Strategy</h1>
            <p>Every battle is won before it is fought. What is your strategy? How will you win? What makes you different and what is your competitive advantage?</p>
            <p>If you’re going to crush your competition it’s not enough to follow the herd and “copy-paste” products. You MUST have a genuine strategic advantage.</p>
        </article>
        <figure>
            <img src="<?php echo get_template_directory_uri(); ?>/img/icon-strategy.png" alt="">
        </figure>
    </div>
</section>

<section class="home-features even">
    <div class="wrap clear">
        <article>
            <h1>Supply Chain</h1>
            <p>In a physical products business the supply chain is your lifeblood. Are you offering the best quality product? Is it produced reliably and on-time? Do you have the lowest possible costs? Are you always in-stock?</p>
            <p>These questions are vitally important. If your answers aren’t a resounding YES then you’re wounded. And it’s seriously limiting your ability to grow and succeed.</p>
        </article>
        <figure>
            <img src="<?php echo get_template_directory_uri(); ?>/img/icon-chain.png" alt="">
        </figure>
    </div>
</section>

<section class="home-features">
    <div class="wrap clear">
        <article>
            <h1>Advertising</h1>
            <p>We don’t like the word “marketing” because it misleads most sellers.</p> 
			<p>Amazon provides you with the tools you need to succeed on a massive scale. But most sellers don't have the skillset to capitalize on fundamental advertising strategies such as PPC, AMS and AAP.</p> 
			<p>You must have a strong strategic advantage and a solid supply chain. Then advertising to generate consistent profitable paid and organic sales is easy. The key is your level of efficiency and sophistication in deploying these tools.</p>
        </article>
        <figure>
            <img src="<?php echo get_template_directory_uri(); ?>/img/icon-add.png" alt="">
        </figure>
    </div>
</section>

<section class="home-features even">
    <div class="wrap clear">
        <article>
            <h1>Operations</h1>
            <p>Your business is a system that’s made up of various sub-systems. You want an effective and profitable operation that can grow. It’s critical to have a wholistic approach and a complete understanding of constraints and dependencies. </p>
			<p>Delegation can harm you as much as it can help you. Building a good machine is a complicated task. Without a grasp of every lever and pulley you will create a flawed mechanism that implodes on itself. </p>
			<p>This is the main challenge facing every entrepreneur. When you get this right scaling to 7-figure profits becomes a realistic challenge.</p>
        </article>
        <figure>
            <img style="top: 30px; position: relative;" src="<?php echo get_template_directory_uri(); ?>/img/icon-operations.png" alt="">
        </figure>
    </div>
</section>

<section class="home-features-title gray-bg the-story">
    <div class="wrap">
        <h1>Great Business Is Science</h1>
        <p>Our methods have evolved through a relentless focus on this business model since 2012. The scientific method - in other words; painstaking trial & error - is the only way to understand what works.</p> 
		<p>I have been in the trenches on this for more than seven years. Hundreds of products and thousands of students have enabled me to grasp the deepest roots of success.</p>
    </div>
</section>

<section class="home-features-title gray-bg free-consultation">
    <div class="wrap">
        <h1>Good Guidance Is Rare</h1>
        <p>Our training, community and proprietary software stack is good.</p>
		<p>To keep it that way we are selective about who we work with and accept new students via application only.</p> 
		<p>If you aren’t 100% committed to growing a successful physical products brand, please DO NOT apply.</p>
		<p>This is only for people who are ready to step up and build a powerful, 7 to 8-figure business.</p>
        <a style="margin-top: 40px" class="button go-intoprofits" href="https://intoprofits.com/application">Apply Now To See If You Qualify</a>
    </div>
</section>

<?php get_footer(); ?>