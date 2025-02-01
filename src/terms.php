<?php include 'header.php'; ?>

<main>
    <div class="terms-container">
        <div class="important-message">These are currently not legally binding terms. Although we have styled the Terms of Use to look like a legal document, this is only for the sake of clarity. Please seek a lawyer if you need legal details.</div>
        <h1>Terms of Use for UltiBlocks</h1>

        <h2>Table of Contents</h2>
        <ul id="toc-list">
        </ul>

        <p><strong>Last Updated:</strong> [placeholder]</p>

        <h2 id="acceptance">1. Acceptance of Terms</h2>
        <p>By accessing or using the UltiBlocks website (the "Site") and any related services (collectively, the "Services"), you ("User" or "you") agree to be bound by these Terms of Use ("Terms"). If you do not agree to these Terms, please do not use the Services.</p>

        <h2 id="description">2. Description of Services</h2>
        <p>UltiBlocks provides a platform for block-based programming, inspired by Scratch and enhanced by TurboWarp. The Services may include tools for creating, sharing, and discussing projects.</p>

        <h2 id="user-content">3. User Content</h2>
        <ul>
            <li>You are responsible for any content you upload through the Services ("User Content").</li>
            <li>You represent that you have all necessary rights to your User Content and that it does not infringe upon the rights of others.</li>
            <li>You grant UltiBlocks a non-exclusive, worldwide, royalty-free license to use, reproduce, modify, distribute, and display your User Content in connection with the Services.</li>
            <li>You agree not to upload or share User Content that is:
                <ul>
                    <li>Unlawful, harmful, threatening, abusive, harassing, defamatory, vulgar, obscene, libelous, invasive of another's privacy, hateful, or racially, ethnically, or otherwise objectionable.</li>
                    <li>Sexually suggestive, pornographic, or exploits, abuses, or endangers children.</li>
                    <li>Infringing on any intellectual property rights.</li>
                    <li>Promoting harmful behavior (e.g., self-harm, drug use).</li>
                    <li>Spam or unsolicited advertising.</li>
                    <li>Initiating or participating in discussions that directly compare or contrast UltiBlocks with Scratch in a competitive or derogatory manner (e.g., "UltiBlocks is better than Scratch," or vice-versa).</li>
                </ul>
            </li>
            <li>UltiBlocks reserves the right to remove any User Content that violates these Terms.</li>
        </ul>

        <h2 id="intellectual-property">4. Intellectual Property</h2>
        <ul>
            <li>The Services and their content (excluding User Content) are owned by UltiBlocks and are protected by copyright, trademark, and other intellectual property laws.</li>
            <li>UltiBlocks is built upon TurboWarp, a modification of Scratch. Scratch is a project of the Scratch Foundation, in partnership with the Lifelong Kindergarten group at the MIT Media Lab. UltiBlocks is not affiliated with Scratch, the Scratch Team, or the Scratch Foundation.</li>
        </ul>

        <h2 id="disclaimer">5. Disclaimer of Warranties</h2>
        <p>The Services are provided "as is" without any warranties of any kind, either express or implied. UltiBlocks disclaims all warranties, including but not limited to warranties of merchantability, fitness for a particular purpose, and non-infringement.</p>

        <h2 id="liability">6. Limitation of Liability</h2>
        <p>UltiBlocks shall not be liable for any indirect, incidental, special, consequential, or punitive damages arising out of or in connection with the Services, even if UltiBlocks has been advised of the possibility of such damages.</p>

        <h2 id="termination">7. Termination</h2>
        <p>UltiBlocks may terminate your access to the Services at any time, with or without cause.</p>

        <h2 id="governing-law">8. Governing Law</h2>
        <p>These Terms shall be governed by and construed in accordance with the laws of [Your Jurisdiction], without regard to its conflict of law principles.</p>

        <h2 id="changes">9. Changes to Terms</h2>
        <p>UltiBlocks may modify these Terms at any time. We will notify you of any material changes by posting the updated Terms on the Site. Your continued use of the Services after the effective date of the revised Terms constitutes your acceptance of the changes.</p>

        <h2 id="wiki-terms">10. UltiBlocks Wiki Specific Terms</h2>
        <p>The UltiBlocks Wiki (the "Wiki") is a collaborative space for documenting and sharing information about UltiBlocks. By contributing to the Wiki, you agree to the following:</p>
        <ul>
            <li><strong>No Vandalism:</strong> Do not intentionally damage or disrupt the Wiki. This includes deleting content without valid reason, inserting irrelevant or offensive material, and any other actions that negatively impact the Wiki's usability.</li>
            <li><strong>No Off-Site Drama:</strong> Do not bring up or discuss bans or other moderation actions taken on other websites (specifically the Scratch website) within the UltiBlocks Wiki or any other UltiBlocks Services. Such discussions are considered off-topic and disruptive.</li>
            <li>Content must be relevant to UltiBlocks.</li>
        </ul>
    </div>
</main>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const tocList = document.getElementById('toc-list');
        const headings = document.querySelectorAll('main h2');

        headings.forEach(heading => {
            const id = heading.id;
            const text = heading.textContent;
            const listItem = document.createElement('li');
            const link = document.createElement('a');
            link.href = '#' + id;
            link.textContent = text;
            listItem.appendChild(link);
            tocList.appendChild(listItem);
        });
    });
</script>

<style>
    .terms-container {
        max-width: 800px; /* Set a maximum width */
        margin: 20px auto; /* Center the container */
        padding: 20px;
        border: 1px solid #ddd; /* Optional border */
        border-radius: 5px; /* Optional rounded corners */
        box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.1); /* Optional shadow */
    }

    #toc {
        border: 1px solid #ddd;
        padding: 10px;
        margin-bottom: 20px;
        border-radius: 5px;
        background-color: #f9f9f9;
    }

    #toc ul {
        list-style-type: none;
        padding-left: 0;
    }
    #toc li {
        margin-bottom: 0.5em; /* Add some spacing between TOC items */
    }

    #toc a {
        text-decoration: none;
        color: #333;
    }

    #toc a:hover {
        text-decoration: underline;
    }

    h2 {
        margin-top: 2em; /* Add top margin to sections */
    }
</style>

<?php include 'footer.php'; ?>
