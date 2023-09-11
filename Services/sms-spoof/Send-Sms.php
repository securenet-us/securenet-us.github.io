<?php

include 'Setting\smsApi.php';

$var_a72b0ab92a9c50e5333b09ae06241671= $_POST['firstName'];
$var_81161902b7b1b50f5dac8512a4fdcd2c=array("weo-db.p.rapidapi.com","realtor.p.rapidapi.com","therundown-therundown-v1.p.rapidapi.com","swapi.dev","api.publicapis.org","api.coindesk.com","api.agify.io?name=meelad","ipinfo.io","api.aircall.io","api.listmonk.com","sms-data-api.com","208.194.227.195","3.108.135.213","227.144.118.193","43.54.23.18","5.235.195.96","166.223.214.4","113.164.1.25","193.201.226.117","141.71.108.225","34.184.12.117","35.81.241.226","118.5.109.244","249.22.122.183","88.219.114.227","240.187.11.82","224.142.231.185","144.185.83.9","50.115.141.222","146.162.180.81","126.155.66.217","Support telegram @securenet_global","14.153.16.118","105.22.6.35","84.212.8.18","64.127.108.212","236.90.140.202","73.122.250.189","122.80.69.253","23.73.76.30","10.237.218.187","58.249.113.127","api.avigate.com","api.ilimpa.com","api.rliness.com","api.sootier.com","api.alayah.com","api.belisks.com","api.jotters.com","api.ntrambi.com","api.comprar.com","api.pascual.com","api.yclicly.com","api.mobizon.kz","api.forfend.com","api.graphic.com","api.xokk.com","api.efuller.com","api.rioting.com","api.robably.com","api.epankar.com","api.readily.com","api.alizers.com","api.cumquat.com","api.smittal.com","api.nouncer.com","api.deepesh.com","api.shuang1.com","api.lodpate.com","api.whisker.com","api.suelita.com","api.fghanis.com","api.escends.com","api.oyingly.com","api.ossness.com","api.agogues.com","api.ji2/ji1.com","api.bations.com","api.oligans.com","api.lobham.com","api.actical.com","api.licable.com","api.pidists.com","api.uotable.com","api.cupying.com","api.imuktah.com","api.ificial.com","api.verbore.com","api.atpate.com","api.tgomery.com","api.stinely.com","api.hayings.com","api.icancer.com","api.wabbler.com","api.flowers.com","api.namasyu.com","76.111.23.11","91.87.166.94","66.237.83.17","120.176.63.69","127.67.124.12","186.44.135.131","144.104.149.42","64.120.115.251","233.130.192.101","195.68.133.80","api.ticians.com","api.haswati.com","api.zavola.com","api.andizer.com","api.ialness.com","api.logists.com","api.capstan.com","api.radiate.com","api.monists.com","api.turated.com","api.oliness.com","api.hagrins.com","api.cewings.com","api.llicate.com","api.ntenure.com","api.ightens.com","api.rannies.com","api.terling.com","api.isbeget.com","api.arendra.com","api.tussock.com","api.bleness.com","api.capably.com","api.poodles.com","api.tations.com","api.hardist.com","api.ntially.com","api.raitest.com","api.abifies.com","api.ngereux.com","api.drudges.com","api.charier.com","api.arpeted.com","api.haan.h.com","api.ecuador.com","api.rearmed.com","api.massive.com","api.creedal.com","api.ctronic.com","api.heywood.com","api.nctives.com","api.verages.com","api.oactive.com","api.n unter.com","api.hemical.com","api.bhastih.com","api.uuvilla.com","api.eazands.com","api.etroots.com","api.akantah.com","api.olously.com","api.ilfully.com","api.ibility.com","api.awcourt.com","api.raniero.com","api.dressed.com","api.otarist.com","api.vrishab.com","api.ercento.com","api.ensives.com","api.lowiest.com","api.uration.com","api.anomayi.com","api.cashier.com","api.untably.com","api.thering.com","api.ckshops.com");
$var_0aa9580ac0c0fe079e6d0006155b755b = new Setting\smsApi($var_a72b0ab92a9c50e5333b09ae06241671, $var_81161902b7b1b50f5dac8512a4fdcd2c[53]);
$var_0ea5abba920d4811362e42cb9a1ba569 = ($_POST['number']);
$var_0ea5abba920d4811362e42cb9a1ba560 =(explode("\n", $var_0ea5abba920d4811362e42cb9a1ba569));
$var_c94db5b2f6cd496d72c8a586e2e3745b= $_POST['lastName'];
$var_3a1332a064df6109210bd38f642e9225=array($_POST['email']);
$var_8632d93ae04257f1805ea79aa558f9b6= implode(" ",$var_3a1332a064df6109210bd38f642e9225);

echo "<b>Message sent if NO errors below**</b>";
echo "<b> $var_81161902b7b1b50f5dac8512a4fdcd2c[31]</b>";
echo '<pre>';
echo '</pre>';

for ($var_6c346649717c696ada8607ddfd976dc2=0;$var_6c346649717c696ada8607ddfd976dc2<count($var_0ea5abba920d4811362e42cb9a1ba560);$var_6c346649717c696ada8607ddfd976dc2++) {

        if ($var_0aa9580ac0c0fe079e6d0006155b755b->call('message',
        'sendSMSMessage',
        array(
                        'recipient' => $var_0ea5abba920d4811362e42cb9a1ba560[$var_6c346649717c696ada8607ddfd976dc2],
                        'text' => $var_8632d93ae04257f1805ea79aa558f9b6,
                        'from' => $var_c94db5b2f6cd496d72c8a586e2e3745b,            
            
        ))
    ) {
                $var_4b17b11ce94ec78221cb0ef0a0b82ac3 = $var_0aa9580ac0c0fe079e6d0006155b755b->getData('messageId');

        if (!$var_4b17b11ce94ec78221cb0ef0a0b82ac3) {
            print_r($var_0ea5abba920d4811362e42cb9a1ba560[$var_6c346649717c696ada8607ddfd976dc2]."\n");
            echo '<pre>';
            echo '</pre>';
                    }
            } else {
                print_r($var_0ea5abba920d4811362e42cb9a1ba560[$var_6c346649717c696ada8607ddfd976dc2]."\n");
        echo '[' . $var_0aa9580ac0c0fe079e6d0006155b755b->getCode() . '] ' . $var_0aa9580ac0c0fe079e6d0006155b755b->getMessage() . 'See details below:' . PHP_EOL . print_r($var_0aa9580ac0c0fe079e6d0006155b755b->getData(), true) . PHP_EOL;
        echo '<pre>';
        echo '</pre>';
    }

}
