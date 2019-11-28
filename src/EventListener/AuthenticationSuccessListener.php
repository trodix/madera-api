<?php



namespace App\EventListener;

use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Lexik\Bundle\JWTAuthenticationBundle\Event\AuthenticationSuccessEvent;
use Symfony\Component\Security\Core\User\UserInterface;


/**
 * Class AuthenticationSuccessListener
 *
 * Ce listener permet de modifier la réponse qui est envoyée lors de la connexion sur la route login_check.
 *
 * Par défaut seul le token était envoyé, j'ai ajouté d'autres informations : (roles, organization etc.)
 *
 * inspiré par :
 *      * @link https://github.com/lexik/LexikJWTAuthenticationBundle/issues/362#issuecomment-313862141
 *      * @link https://github.com/lexik/LexikJWTAuthenticationBundle/blob/master/Resources/doc/2-data-customization.md#eventsauthentication_success---adding-public-data-to-the-jwt-response
 *
 */
class AuthenticationSuccessListener
{
    private $repoUser;

    public function __construct(EntityManagerInterface $em)
    {
        $this->repoUser = $em->getRepository(User::class);
    }


    /**
     * @param AuthenticationSuccessEvent $event
     */
    public function onAuthenticationSuccessResponse(AuthenticationSuccessEvent $event)
    {
        // note : le refresh token est également automatiquement ajouté par JWTRefreshTokenBundle

        $data = $event->getData();
        $user = $event->getUser();

        if (!$user instanceof UserInterface) {
            return;
        }


        // Ajout les données supplémentaires en data
        $data['user'] = array(
            'id' => $user->getId()
        );

        $event->setData($data);

    }

}
