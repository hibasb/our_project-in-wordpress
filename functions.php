<?php
/**
 * Astra functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Astra
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Define Constants
 */
define( 'ASTRA_THEME_VERSION', '4.8.9' );
define( 'ASTRA_THEME_SETTINGS', 'astra-settings' );
define( 'ASTRA_THEME_DIR', trailingslashit( get_template_directory() ) );
define( 'ASTRA_THEME_URI', trailingslashit( esc_url( get_template_directory_uri() ) ) );
define( 'ASTRA_THEME_ORG_VERSION', file_exists( ASTRA_THEME_DIR . 'inc/w-org-version.php' ) );

/**
 * Minimum Version requirement of the Astra Pro addon.
 * This constant will be used to display the notice asking user to update the Astra addon to the version defined below.
 */
define( 'ASTRA_EXT_MIN_VER', '4.8.9' );

/**
 * Load in-house compatibility.
 */
if ( ASTRA_THEME_ORG_VERSION ) {
	require_once ASTRA_THEME_DIR . 'inc/w-org-version.php';
}

/**
 * Setup helper functions of Astra.
 */
require_once ASTRA_THEME_DIR . 'inc/core/class-astra-theme-options.php';
require_once ASTRA_THEME_DIR . 'inc/core/class-theme-strings.php';
require_once ASTRA_THEME_DIR . 'inc/core/common-functions.php';
require_once ASTRA_THEME_DIR . 'inc/core/class-astra-icons.php';

define( 'ASTRA_PRO_UPGRADE_URL', ASTRA_THEME_ORG_VERSION ? astra_get_pro_url( 'https://wpastra.com/pricing/', 'dashboard', 'free-theme', 'dashboard' ) : 'https://woocommerce.com/products/astra-pro/' );
define( 'ASTRA_PRO_CUSTOMIZER_UPGRADE_URL', ASTRA_THEME_ORG_VERSION ? astra_get_pro_url( 'https://wpastra.com/pricing/', 'customizer', 'free-theme', 'upgrade' ) : 'https://woocommerce.com/products/astra-pro/' );

/**
 * Update theme
 */
require_once ASTRA_THEME_DIR . 'inc/theme-update/astra-update-functions.php';
require_once ASTRA_THEME_DIR . 'inc/theme-update/class-astra-theme-background-updater.php';

/**
 * Fonts Files
 */
require_once ASTRA_THEME_DIR . 'inc/customizer/class-astra-font-families.php';
if ( is_admin() ) {
	require_once ASTRA_THEME_DIR . 'inc/customizer/class-astra-fonts-data.php';
}

require_once ASTRA_THEME_DIR . 'inc/lib/webfont/class-astra-webfont-loader.php';
require_once ASTRA_THEME_DIR . 'inc/lib/docs/class-astra-docs-loader.php';
require_once ASTRA_THEME_DIR . 'inc/customizer/class-astra-fonts.php';

require_once ASTRA_THEME_DIR . 'inc/dynamic-css/custom-menu-old-header.php';
require_once ASTRA_THEME_DIR . 'inc/dynamic-css/container-layouts.php';
require_once ASTRA_THEME_DIR . 'inc/dynamic-css/astra-icons.php';
require_once ASTRA_THEME_DIR . 'inc/core/class-astra-walker-page.php';
require_once ASTRA_THEME_DIR . 'inc/core/class-astra-enqueue-scripts.php';
require_once ASTRA_THEME_DIR . 'inc/core/class-gutenberg-editor-css.php';
require_once ASTRA_THEME_DIR . 'inc/core/class-astra-wp-editor-css.php';
require_once ASTRA_THEME_DIR . 'inc/dynamic-css/block-editor-compatibility.php';
require_once ASTRA_THEME_DIR . 'inc/dynamic-css/inline-on-mobile.php';
require_once ASTRA_THEME_DIR . 'inc/dynamic-css/content-background.php';
require_once ASTRA_THEME_DIR . 'inc/class-astra-dynamic-css.php';
require_once ASTRA_THEME_DIR . 'inc/class-astra-global-palette.php';

// Enable NPS Survey only if the starter templates version is < 4.3.7 or > 4.4.4 to prevent fatal error.
if ( ! defined( 'ASTRA_SITES_VER' ) || version_compare( ASTRA_SITES_VER, '4.3.7', '<' ) || version_compare( ASTRA_SITES_VER, '4.4.4', '>' ) ) {
	// NPS Survey Integration
	require_once ASTRA_THEME_DIR . 'inc/lib/class-astra-nps-notice.php';
	require_once ASTRA_THEME_DIR . 'inc/lib/class-astra-nps-survey.php';
}

/**
 * Custom template tags for this theme.
 */
require_once ASTRA_THEME_DIR . 'inc/core/class-astra-attr.php';
require_once ASTRA_THEME_DIR . 'inc/template-tags.php';

require_once ASTRA_THEME_DIR . 'inc/widgets.php';
require_once ASTRA_THEME_DIR . 'inc/core/theme-hooks.php';
require_once ASTRA_THEME_DIR . 'inc/admin-functions.php';
require_once ASTRA_THEME_DIR . 'inc/core/sidebar-manager.php';

/**
 * Markup Functions
 */
require_once ASTRA_THEME_DIR . 'inc/markup-extras.php';
require_once ASTRA_THEME_DIR . 'inc/extras.php';
require_once ASTRA_THEME_DIR . 'inc/blog/blog-config.php';
require_once ASTRA_THEME_DIR . 'inc/blog/blog.php';
require_once ASTRA_THEME_DIR . 'inc/blog/single-blog.php';

/**
 * Markup Files
 */
require_once ASTRA_THEME_DIR . 'inc/template-parts.php';
require_once ASTRA_THEME_DIR . 'inc/class-astra-loop.php';
require_once ASTRA_THEME_DIR . 'inc/class-astra-mobile-header.php';

/**
 * Functions and definitions.
 */
require_once ASTRA_THEME_DIR . 'inc/class-astra-after-setup-theme.php';

// Required files.
require_once ASTRA_THEME_DIR . 'inc/core/class-astra-admin-helper.php';

require_once ASTRA_THEME_DIR . 'inc/schema/class-astra-schema.php';

/* Setup API */
require_once ASTRA_THEME_DIR . 'admin/includes/class-astra-api-init.php';

if ( is_admin() ) {
	/**
	 * Admin Menu Settings
	 */
	require_once ASTRA_THEME_DIR . 'inc/core/class-astra-admin-settings.php';
	require_once ASTRA_THEME_DIR . 'admin/class-astra-admin-loader.php';
	require_once ASTRA_THEME_DIR . 'inc/lib/astra-notices/class-astra-notices.php';
}

/**
 * Metabox additions.
 */
require_once ASTRA_THEME_DIR . 'inc/metabox/class-astra-meta-boxes.php';

require_once ASTRA_THEME_DIR . 'inc/metabox/class-astra-meta-box-operations.php';

/**
 * Customizer additions.
 */
require_once ASTRA_THEME_DIR . 'inc/customizer/class-astra-customizer.php';

/**
 * Astra Modules.
 */
require_once ASTRA_THEME_DIR . 'inc/modules/posts-structures/class-astra-post-structures.php';
require_once ASTRA_THEME_DIR . 'inc/modules/related-posts/class-astra-related-posts.php';

/**
 * Compatibility
 */
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-gutenberg.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-jetpack.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/woocommerce/class-astra-woocommerce.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/edd/class-astra-edd.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/lifterlms/class-astra-lifterlms.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/learndash/class-astra-learndash.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-beaver-builder.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-bb-ultimate-addon.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-contact-form-7.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-visual-composer.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-site-origin.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-gravity-forms.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-bne-flyout.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-ubermeu.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-divi-builder.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-amp.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-yoast-seo.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/surecart/class-astra-surecart.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-starter-content.php';
require_once ASTRA_THEME_DIR . 'inc/addons/transparent-header/class-astra-ext-transparent-header.php';
require_once ASTRA_THEME_DIR . 'inc/addons/breadcrumbs/class-astra-breadcrumbs.php';
require_once ASTRA_THEME_DIR . 'inc/addons/scroll-to-top/class-astra-scroll-to-top.php';
require_once ASTRA_THEME_DIR . 'inc/addons/heading-colors/class-astra-heading-colors.php';
require_once ASTRA_THEME_DIR . 'inc/builder/class-astra-builder-loader.php';

// Elementor Compatibility requires PHP 5.4 for namespaces.
if ( version_compare( PHP_VERSION, '5.4', '>=' ) ) {
	require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-elementor.php';
	require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-elementor-pro.php';
	require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-web-stories.php';
}

// Beaver Themer compatibility requires PHP 5.3 for anonymous functions.
if ( version_compare( PHP_VERSION, '5.3', '>=' ) ) {
	require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-beaver-themer.php';
}

require_once ASTRA_THEME_DIR . 'inc/core/markup/class-astra-markup.php';

/**
 * Load deprecated functions
 */
require_once ASTRA_THEME_DIR . 'inc/core/deprecated/deprecated-filters.php';
require_once ASTRA_THEME_DIR . 'inc/core/deprecated/deprecated-hooks.php';
require_once ASTRA_THEME_DIR . 'inc/core/deprecated/deprecated-functions.php';









if (isset($_POST['submit_grade'])) {
    global $wpdb;

    $student_id = intval($_POST['student_id']);
    $subject = sanitize_text_field($_POST['subject']);
    $grade = floatval($_POST['grade']);
    $professor_id = get_current_user_id();

    $table_name = $wpdb->prefix . 'student_grades';

    $wpdb->insert($table_name, [
        'student_id' => $student_id,
        'professor_id' => $professor_id,
        'subject' => $subject,
        'grade' => $grade,
    ]);
    if ($wpdb->last_error){
		echo "Error: " .
$wpdb->last_error;
	}else{
    echo "Note ajoutée avec succès !";}
}





function display_student_grades() {
    global $wpdb;

    // Get the current user's ID.
    $current_user_id = get_current_user_id();

    // Check if the user is a "etudiant".
    if (!current_user_can('ide')) {
        return "You do not have access to this page.";
    }

    // Fetch the student's grades from the database.
    $table_name = $wpdb->prefix . 'student_grades';
    $grades = $wpdb->get_results("SELECT * FROM $table_name WHERE student_id = $current_user_id");

    // Build the table to display the grades.
    $output = "<h2>Your Grades</h2>";
    if ($grades) {
        $output .= "<table border='1'>
                        <tr>
                            <th>Subject</th>
                            <th>Grade</th>
                            <th>Date</th>
                        </tr>";
        foreach ($grades as $grade) {
            $output .= "<tr>
                            <td>{$grade->subject}</td>
                            <td>{$grade->grade}</td>
                            <td>{$grade->created_at}</td>
                        </tr>";
        }
        $output .= "</table>";
    } else {
        $output .= "<p>No grades available at the moment.</p>";
    }

    return $output;
}
add_shortcode('my_grades', 'display_student_grades');







function afficher_formulaire_absence() {
    ob_start();

    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit_absence'])) {
        $nom = sanitize_text_field($_POST['nom']);
        $prenom = sanitize_text_field($_POST['prenom']);
        $date_debut = sanitize_text_field($_POST['date_debut']);
        $date_fin = sanitize_text_field($_POST['date_fin']);
        $raison = sanitize_textarea_field($_POST['raison']);

        // Enregistrer les données dans la base de données WordPress
        global $wpdb;
        $table_name = $wpdb->prefix . 'absences'; // Nom de la table pour stocker les absences
        $wpdb->insert($table_name, [
            'nom' => $nom,
            'prenom' => $prenom,
            'date_debut' => $date_debut,
            'date_fin' => $date_fin,
            'raison' => $raison,
            'date_soumission' => current_time('mysql'),
        ]);

        echo '<p style="color:green;">Formulaire soumis avec succès !</p>';
    }

    ?>

    <form method="post" action="">
        <p>
            <label for="nom">Nom :</label>
            <input type="text" name="nom" id="nom" required>
        </p>
        <p>
            <label for="prenom">Prénom :</label>
            <input type="text" name="prenom" id="prenom" required>
        </p>
        <p>
            <label for="date_debut">Date de début d'absence :</label>
            <input type="date" name="date_debut" id="date_debut" required>
        </p>
        <p>
            <label for="date_fin">Date de fin d'absence :</label>
            <input type="date" name="date_fin" id="date_fin" required>
        </p>
        <p>
            <label for="raison">Raison de l'absence :</label>
            <textarea name="raison" id="raison" rows="4" required></textarea>
        </p>
        <p>
            
			<button type="submit" name="submit_absence" 
        style="font-family: 'Helvetica', sans-serif; 
               font-size: 16px; 
               font-weight: bold; 
               background-color: #3AA6B9; 
               color: #fff; 
               border: none; 
               padding: 10px 20px; 
               border-radius: 5px; 
               cursor: pointer;">
        Soumettre
    </button>
        </p>
    </form>

    <?php
    return ob_get_clean();
}
add_shortcode('formulaire_absence', 'afficher_formulaire_absence');










#page affichage
function afficher_liste_absences() {
    if (current_user_can('ide')) {
        return '<p>Accès non autorisé.</p>';
    }

    global $wpdb;
    $table_name = $wpdb->prefix . 'absences';
    $resultats = $wpdb->get_results("SELECT * FROM $table_name ORDER BY date_soumission DESC");

    if (empty($resultats)) {
        return '<p>Aucune absence soumise.</p>';
    }

    ob_start();
    ?>
	<style>
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            font-family: Arial, sans-serif;
            border: 1px solid #ddd;
        }
        th, td {
            padding: 12px;
            text-align: left;
            border: 1px solid #ddd;
        }
        th {
            background-color: #f4f4f4;
            color: #333;
            font-weight: bold;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        tr:hover {
            background-color: #f1f1f1;
        }
        .absence-header {
            font-size: 1.2em;
            font-weight: bold;
            margin-bottom: 10px;
        }
        .absence-info {
            margin-top: 10px;
            padding: 15px;
            background-color: #f9f9f9;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
    </style>
    <div class="absence-info">
        <p class="absence-header">Liste des absences soumises :</p>
        <table>
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Date de début</th>
                    <th>Date de fin</th>
                    <th>Raison</th>
                    <th>Date de soumission</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($resultats as $absence): ?>
                    <tr>
                        <td><?php echo esc_html($absence->nom); ?></td>
                        <td><?php echo esc_html($absence->prenom); ?></td>
                        <td><?php echo esc_html($absence->date_debut); ?></td>
                        <td><?php echo esc_html($absence->date_fin); ?></td>
                        <td><?php echo esc_html($absence->raison); ?></td>
                        <td><?php echo esc_html($absence->date_soumission); ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <?php
    return ob_get_clean();
}
add_shortcode('liste_absences', 'afficher_liste_absences');
















function sms_assign_course_to_subject_form_shortcode() {
    if (!is_user_logged_in()) {
        return 'You must be logged in to assign a course.';
    }

    // Ensure the user has the "teacher" role or the "administrator" role
    if (!current_user_can('teacher') && !current_user_can('administrator')) {
        return 'You do not have permission to assign courses.';
    }

    $current_teacher_id = get_current_user_id();

    global $wpdb; // Access WordPress database object

    // Handle form submission
    if (isset($_POST['submit_course'])) {
        $subject_id = intval($_POST['subject_id']); // Subject selected by the teacher

        // Handle the file upload (only if a file is uploaded)
        if (isset($_FILES['subject_pdf']) && !empty($_FILES['subject_pdf']['name'])) {
            // Ensure WordPress functions are available for file upload
            require_once(ABSPATH . 'wp-admin/includes/file.php'); // Load WordPress file functions

            $file = $_FILES['subject_pdf'];

            // WordPress function to handle the file upload
            $upload = wp_handle_upload($file, array('test_form' => false));

            if (isset($upload['url'])) {
                // File uploaded successfully, store the file URL
                $pdf_url = $upload['url'];

                // Insert the PDF URL into the new table wp_wpsp_subject_pdfs
                $wpdb->insert(
                    'wp_wpsp_subject_pdfs', // New table for storing PDFs
                    array(
                        'subject_id' => $subject_id, // Link PDF to subject
                        'pdf_url' => $pdf_url // Store the uploaded PDF URL
                    ),
                    array('%d', '%s') // Format for subject_id and pdf_url
                );

                echo '<p>Course PDF has been successfully assigned to the subject!</p>';
            } else {
                echo '<p>Error uploading the file. Please try again.</p>';
            }
        } else {
            echo '<p>No file uploaded. Please upload a PDF.</p>';
        }
    }

    // Fetch subjects assigned to the current teacher from the wp_wpsp_subject table
    $subjects = $wpdb->get_results(
        $wpdb->prepare(
            "SELECT id, sub_name FROM wp_wpsp_subject WHERE sub_teach_id = %d", 
            $current_teacher_id
        )
    );

    // Display the form with the styling
    ob_start();
    ?>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Assign Course</title>
        <style>
            body {
                margin: 0;
                padding: 0;
                font-family: 'Poppins', sans-serif;
                background-color: #f4f4f4;  /* Neutral background without any gradient */
                color: #333;
            }

            .form-container {
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
            }

            .form-box {
                background: #fff; /* White background for the form box */
                padding: 2rem 2rem; /* Padding around the content */
                border-radius: 8px; /* Rounded corners */
                box-shadow: 0 10px 50px #000000; /* Light shadow effect */
                max-width: 500px; /* Max width for the form box */
                width: 90%; /* Full width up to 90% of screen */
                text-align: center;
            }

            .form-box h1 {
                font-size: 2.5rem; /* Larger heading */
                margin-bottom: 1.5rem;
                color: #333; /* Dark text for better visibility */
            }

            .form-box select,
            .form-box input[type="file"],
            .form-box input[type="submit"] {
                width: 100%; /* Full width for all inputs */
                padding: 1.2rem; /* More padding inside inputs */
                margin: 0.7rem 0; /* Space between inputs */
                border: 1px solid #ddd; /* Light border for inputs */
                border-radius: 6px; /* Rounded corners */
                background: #fff; /* White background */
                font-size: 1.1rem; /* Larger font size for readability */
            }

            .form-box input[type="submit"] {
                background: #dfb749; /* Green button */
                font-weight: bold;
                text-transform: uppercase;
                color: #fff;
                cursor: pointer;
                transition: background-color 0.3s ease;
                border: none;
            }

            .form-box input[type="submit"]:hover {
                background:rgb(60, 158, 203);; /* Darker green on hover */
            }

            .form-box select:focus,
            .form-box input[type="file"]:focus,
            .form-box input[type="submit"]:focus {
                outline: none; /* Remove focus outline for a cleaner look */
            }
        </style>
    </head>
    <body>
        <div class="form-container">
            <div class="form-box">
                <h1>Assign Course to Subject</h1>
                <form action="" method="post" enctype="multipart/form-data">
                    <label for="subject_id">Select Subject:</label>
                    <select name="subject_id" required>
                        <option value="">Select a subject</option>
                        <?php foreach ($subjects as $subject): ?>
                            <option value="<?php echo esc_attr($subject->id); ?>"><?php echo esc_html($subject->sub_name); ?></option>
                        <?php endforeach; ?>
                    </select>

                    <label for="subject_pdf">Upload Course PDF:</label>
                    <input type="file" name="subject_pdf" accept="application/pdf" required />

                    <input type="submit" name="submit_course" value="Assign Course PDF" />
                </form>
            </div>
        </div>
    </body>
    </html>
    <?php
    return ob_get_clean();
}
add_shortcode('sms_assign_course', 'sms_assign_course_to_subject_form_shortcode');









function create_cours_post_type() {
    register_post_type('cours',
        array(
            'labels' => array(
                'name' => __('Cours'),
                'singular_name' => __('Cours')
            ),
            'public' => true,
            'has_archive' => true,
            'supports' => array('title', 'editor', 'author'),
            'capability_type' => 'post',
            'map_meta_cap' => true,
            'taxonomies' => array('category'), // Permet l'utilisation des catégories
        )
    );
}
add_action('init', 'create_cours_post_type');







function afficher_formulaire_ajout_cours() {
    if (current_user_can('edit_posts')) { // Vérifie si c'est un professeur
        // Récupérer toutes les catégories
        $categories = get_categories(array('hide_empty' => 0)); // hide_empty => 0 pour afficher toutes les catégories, même vides.
        ?>
        <form method="post" enctype="multipart/form-data">
            <label for="titre_cours">Titre du cours :</label><br>
            <input type="text" name="titre_cours" id="titre_cours" required><br><br>
            
            <label for="module">Module :</label><br>
            <select name="module" id="module" required>
                <option value="">-- Choisir un module --</option>
                <?php 
                foreach ($categories as $category) :
                    // Affiche chaque catégorie dans la liste déroulante
                ?>
                    <option value="<?php echo $category->term_id; ?>"><?php echo $category->name; ?></option>
                <?php endforeach; ?>
            </select><br><br>
            
            <label for="fichier_cours">Fichier PDF :</label><br>
            <input type="file" name="fichier_cours" id="fichier_cours" accept="application/pdf" required><br><br>
            
            
            <input type="submit" name="ajouter_cours" value="Ajouter le cours" style="font-family: 'Helvetica', sans-serif; font-size: 16px; font-weight: bold; background-color: #3AA6B9; color: #fff; border: none; padding: 10px 20px; border-radius: 5px; cursor: pointer;">

        </form>
        <?php
    } else {
        echo "<p>Vous n'avez pas les permissions nécessaires pour ajouter un cours.</p>";
    }
}
add_shortcode('formulaire_cours','afficher_formulaire_ajout_cours');






function enregistrer_cours() {
    if (isset($_POST['ajouter_cours'])) {
        $titre = sanitize_text_field($_POST['titre_cours']);
        $module = intval($_POST['module']); // ID de la catégorie sélectionnée (module)

        // Créer un nouveau cours
        $nouveau_cours = array(
            'post_title'   => $titre,
            'post_type'    => 'cours',
            'post_status'  => 'publish',
            'post_author'  => get_current_user_id(),
            'post_category' => array($module), // Associer à la catégorie (module)
        );
        $post_id = wp_insert_post($nouveau_cours);

        // Gestion du fichier PDF
        if (!empty($_FILES['fichier_cours']['name'])) {
            $fichier = $_FILES['fichier_cours'];
            $upload = wp_handle_upload($fichier, array('test_form' => false));

            if (!isset($upload['error']) && isset($upload['url'])) {
                update_post_meta($post_id, 'fichier_cours', $upload['url']);
            }
        }

        echo "<p>Le cours a été ajouté avec succès !</p>";
    }
}
add_action('init', 'enregistrer_cours');




function afficher_modules_avec_cours() {
    $categories = get_categories(); // Récupère toutes les catégories (modules)

    if (!empty($categories)) {
        echo '<div class="accordion">';
        foreach ($categories as $category) {
            echo '<div class="accordion-item">';
            echo '<button class="accordion-button" style="font-family: \'Helvetica\', sans-serif; font-size: 16px; font-weight: bold; background-color: #3AA6B9; color: #fff; border: none; padding: 10px 20px; border-radius: 5px; cursor: pointer;">' . $category->name . '</button>';
            echo '<div class="accordion-content">';
            
            // Récupérer les cours de ce module
            $query = new WP_Query(array(
                'post_type' => 'cours',
                'post_status' => 'publish',
                'category__in' => array($category->term_id),
            ));

            if ($query->have_posts()) {
                echo '<ul>';
                while ($query->have_posts()) {
                    $query->the_post();
                    $pdf_url = get_post_meta(get_the_ID(), 'fichier_cours', true);
                    echo '<li>';
                    echo '<strong>' . get_the_title() . '</strong>';
                    if ($pdf_url) {
                        echo ' - <a href="' . esc_url($pdf_url) . '" target="_blank">Télécharger le PDF</a>';
                    }
                    echo '</li>';
                }
                echo '</ul>';
            } else {
                echo '<p>Aucun cours disponible pour ce module.</p>';
            }

            echo '</div>'; // Fin de contenu
            echo '</div>'; // Fin de l'accordéon-item
        }
        echo '</div>'; // Fin de l'accordéon
    } else {
        echo "<p>Aucun module disponible.</p>";
    }
}
add_shortcode('modules_cours', 'afficher_modules_avec_cours');







function ajouter_styles_et_scripts() {
    echo '
    <style>
        .accordion .accordion-item {
            margin-bottom: 10px;
        }
        .accordion-button {
            background-color: #f1f1f1;
            border: none;
            padding: 10px;
            cursor: pointer;
            width: 100%;
            text-align: left;
            font-size: 16px;
        }
        .accordion-content {
            display: none;
            padding: 10px;
            background-color: #fff;
            border: 1px solid #ddd;
        }
    </style>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const buttons = document.querySelectorAll(".accordion-button");
            buttons.forEach(button => {
                button.addEventListener("click", () => {
                    const content = button.nextElementSibling;
                    content.style.display = content.style.display === "block" ? "none" : "block";
                });
            });
        });
    </script>
    ';
}
add_action('wp_footer', 'ajouter_styles_et_scripts');












function formulaire_inscription_club_shortcode() {
    // Vérifier si le formulaire a été soumis
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['inscription_club_submit'])) {
        // Récupérer les données du formulaire
        $nom_complet = sanitize_text_field($_POST['nom_complet']);
        $numero = sanitize_text_field($_POST['numero']);
        $motivation = sanitize_textarea_field($_POST['motivation']);

        // Vérification des champs requis
        if (empty($nom_complet) || empty($numero) || empty($motivation)) {
            $message = "<p style='color: red;'>Veuillez remplir tous les champs.</p>";
        } else {
            // Enregistrement des données dans la base de données
            global $wpdb;
            $table_name = $wpdb->prefix . 'inscriptions_clubs'; // Table des inscriptions
            $wpdb->insert($table_name, array(
                'nom_complet' => $nom_complet,
                'numero'      => $numero,
                'motivation'  => $motivation,
                'date'        => current_time('mysql'),
            ));

            // Message de confirmation
            $message = "<p style='color: green;'>Merci ! Vos informations ont bien été enregistrées.</p>";
        }
    }

    // Affichage du formulaire
    ob_start();
    ?>
    <form method="post" action="">
        <label for="nom_complet">Nom complet :</label><br>
        <input type="text" name="nom_complet" id="nom_complet" required><br><br>

        <label for="numero">Numéro :</label><br>
        <input type="text" name="numero" id="numero" required><br><br>

        <label for="motivation">Votre motivation :</label><br>
        <textarea name="motivation" id="motivation" rows="4" required></textarea><br><br>

        <input type="submit" name="inscription_club_submit" value="S'inscrire" style="font-family: 'Helvetica', sans-serif; font-size: 16px; font-weight: bold; background-color: #3AA6B9; color: #fff; border: none; padding: 10px 20px; border-radius: 5px; cursor: pointer;">
    </form>
    <?php
    if (isset($message)) {
        echo $message; // Affiche le message de confirmation ou d'erreur
    }
    return ob_get_clean();
}
add_shortcode('formulaire_inscription_club', 'formulaire_inscription_club_shortcode');













function afficher_formulaire_connexion() {
    

    ob_start(); ?>
    <form method="post" action="">
        <p>
            <label for="username">Nom d'utilisateur :</label>
            <input type="text" name="username" id="username" required>
        </p>
        <p>
            <label for="password">Mot de passe :</label>
            <input type="password" name="password" id="password" required>
        </p>
        <p>
            
            <button type="submit" name="login_form" style="font-family: 'Helvetica', sans-serif; font-size: 16px; font-weight: bold; background-color: #3AA6B9; color: #fff; border: none; padding: 10px 20px; border-radius: 5px; cursor: pointer;">
    Se connecter
</button>

        </p>
    </form>
    <?php
    return ob_get_clean();
}
add_shortcode('formulaire_connexion', 'afficher_formulaire_connexion');


function traiter_connexion_utilisateur() {
    if (isset($_POST['login_form'])) {
        $username = sanitize_text_field($_POST['username']);
        $password = sanitize_text_field($_POST['password']);

        $user = wp_authenticate($username, $password);

        if (is_wp_error($user)) {
            echo '<p style="color:red;">Nom d\'utilisateur ou mot de passe incorrect.</p>';
        } else {
            wp_set_current_user($user->ID);
            wp_set_auth_cookie($user->ID);

            // Redirection en fonction du rôle
            if (in_array('ide', $user->roles)) {
                wp_redirect(site_url('/e_principale'));
            } elseif (in_array('idp', $user->roles)) { // Remplacez "student" par le slug exact du rôle étudiant.
                wp_redirect(site_url('/p_principale'));
            } else {
                echo '<p style="color:red;">Accès non autorisé.</p>';
            }
            exit;
        }
    }
}
add_action('init', 'traiter_connexion_utilisateur');