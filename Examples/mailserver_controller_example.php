<?php
require_once __DIR__ . './../vendor/autoload.php'; // Autoload files using Composer autoload

#Nota:
#-Disconnect each block that is between /* ... */ to test each controller's method


$service = new Awaraks\Controllers\MailServerController();
try {


    #----------Create a mail sender with template,example call function------------#
    /*
    $vars = array(
        'code'=>"value"
    );
    $from="arawakdigital@gmail.com";
    $to=["example@gmail.com"];
    $template=new \Awaraks\Entity\MailTemplateEntity($vars);
    $details = new \Awaraks\Entity\MailTemplateDetailEntity([],$template,"Asunto");
    $head = new \Awaraks\Entity\MailHeadEntity([],[],$from,$to);
    $model = new \Awaraks\Entity\MailEntity($details,$head,array());
    $response = $service->sendMailWithTemplate($model);
    print_r($response);
    */

} catch (\Awaraks\Controllers\Exceptions\BadRequestException $e) {
    print_r($e->getMessage());
} catch (\Awaraks\Controllers\Exceptions\BadGatewayException $e) {
    print_r($e->getMessage());
} catch (\Awaraks\Controllers\Exceptions\ForbiddenException $e) {
    print_r($e->getMessage());
} catch (\Awaraks\Controllers\Exceptions\GatewayTimeoutException $e) {
    print_r($e->getMessage());
} catch (\Awaraks\Controllers\Exceptions\NotFoundException $e) {
    print_r($e->getMessage());
} catch (\Awaraks\Controllers\Exceptions\UnauthorizedException   $e) {
    print_r($e->getMessage());
} catch (\Awaraks\Controllers\Exceptions\InternalServerErrorException $e) {
    print_r($e->getMessage());
}catch (\Awaraks\Controllers\Exceptions\ServiceUnavailableException $e) {
    print_r($e->getMessage());
}catch (\Awaraks\Controllers\Exceptions\ArawaksException $e) {
    print_r($e->getMessage());
}