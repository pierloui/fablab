<?php
/**
 * HomePageController.php File Doc
 *
 * Controller permettant le chargement du fil d'actualité d'un user
 * sur la route /news-feed
 *
 * PHP Version 5.6
 *
 * @category   File
 * @package    CentraleLille:HomepageBundle
 * @subpackage Controller
 * @author     Lechaptois Martin <martin.lechaptois@gmail.com>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU General Public License
 * @link       https://github.com/EBMCentraleLille/fablab
 */

namespace CentraleLille\HomepageBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * HomepageController Class Doc
 *
 * Controller de chargement de la homepage
 *
 * @category   Controller
 * @package    CentraleLille:HomepageBundle
 * @subpackage Controller
 * @author     Lechaptois Martin <martin.lechaptois@gmail.com>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU General Public License
 * @link       https://github.com/EBMCentraleLille/fablab
 */
class HomepageController extends Controller
{
    /**
    * IndexAction Function Doc
    *
    * Cette fonction récupère les informations des projets récents
    * pour les afficher sur la homepage.
    *
    * @return Twig La vue Twig à display
    */
    public function indexAction()
    {
        $weeklyProject=[
            'projectId'=>'3',
            'projectName'=>'Projet De La semaine',
            'projectDescription'=>'Ceci est la description du projet de la semaine',
            'projectPicture'=>'http://thingiverse-production-new.s3.amazonaws.com'
            . '/renders/71/73/1f/f0/10/1c60646068ae96e9d944ead31ad3c6ec_preview_featured.jpg'
        ];
        $news=[
            [
                'userName'=>'Martin Lechaptois',
                'projectName'=>'Project De Martin',
                'projectPic'=>'http://thingiverse-production-new.s3.amazonaws.com'
                . '/renders/71/73/1f/f0/10/1c60646068ae96e9d944ead31ad3c6ec_preview_featured.jpg',
                'newsType'=>'a commenté'
            ],
            [
                'userName'=>'Martin Lechaptois',
                'projectName'=>'Project De Martin',
                'projectPic'=>'http://thingiverse-production-new.s3.amazonaws.com'
                . '/renders/71/73/1f/f0/10/1c60646068ae96e9d944ead31ad3c6ec_preview_featured.jpg',
                'newsType'=>'a commenté'
            ],
            [
                'userName'=>'Martin Lechaptois',
                'projectName'=>'Project De Martin',
                'projectPic'=>'http://thingiverse-production-new.s3.amazonaws.com'
                . '/renders/71/73/1f/f0/10/1c60646068ae96e9d944ead31ad3c6ec_preview_featured.jpg',
                'newsType'=>'a commenté'
            ],
            [
                'userName'=>'Martin Lechaptois',
                'projectName'=>'Project De Martin',
                'projectPic'=>'http://thingiverse-production-new.s3.amazonaws.com'
                . '/renders/71/73/1f/f0/10/1c60646068ae96e9d944ead31ad3c6ec_preview_featured.jpg',
                'newsType'=>'a commenté'
            ],
            [
                'userName'=>'Martin Lechaptois',
                'projectName'=>'Project De Martin',
                'projectPic'=>'http://thingiverse-production-new.s3.amazonaws.com'
                . '/renders/71/73/1f/f0/10/1c60646068ae96e9d944ead31ad3c6ec_preview_featured.jpg',
                'newsType'=>'a commenté'
            ]];
        $thematics=['Mécanique','Impression 3D','Arduino',
                    'Électronique','Drone','CAO','Informatique','Réalité Virtuelle'];
        $recentProjects=[
            [
                'userName'=>'Martin Lechaptois',
                'projectName'=>'Project De Martin',
                'projectPic'=>'http://thingiverse-production-new.s3.amazonaws.com'
                . '/renders/71/73/1f/f0/10/1c60646068ae96e9d944ead31ad3c6ec_preview_featured.jpg',
                'likes'=>19,
                'messages'=>3,
                'files'=>4
            ],
            [
                'userName'=>'Martin Lechaptois',
                'projectName'=>'Project De Martin',
                'projectPic'=>'http://thingiverse-production-new.s3.amazonaws.com'
                . '/renders/71/73/1f/f0/10/1c60646068ae96e9d944ead31ad3c6ec_preview_featured.jpg',
                'likes'=>3,
                'messages'=>15,
                'files'=>2
            ],
            [
                'userName'=>'Martin Lechaptois',
                'projectName'=>'Project De Martin',
                'projectPic'=>'http://thingiverse-production-new.s3.amazonaws.com'
                . '/renders/71/73/1f/f0/10/1c60646068ae96e9d944ead31ad3c6ec_preview_featured.jpg',
                'likes'=>5,
                'messages'=>9,
                'files'=>1
            ]];
        return $this->render(
            'CentraleLilleHomepageBundle:Default:index.html.twig',
            [
                'weeklyProject' => $weeklyProject,
                'news' => $news,
                'thematics' => $thematics,
                'recentProjects' => $recentProjects,
                'username'=>"Martin"
            ]
        );
    }
}
