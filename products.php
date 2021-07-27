<?php

class Product
{
  public $name, $description, $image, $available;

  public function setName($n)
  {
    $this->name = $n;
  }

  public function setDescription($d)
  {
    $this->description = $d;
  }

  public function setImage($i)
  {
    $this->image = $i;
  }

  public function setAvailable($a)
  {
    $this->available = $a;
  }

  public function getImage()
  {
    return $this->image;
  }
}

$products = array();
//00
/********************************************************************************/
$newProd = new Product();
$newProd->setName('PARMANU');
$newProd->setDescription('Parmanu is 100 % Natural, safer and enriched organic plant bio-stimulant.It is useful in early germination, vigorious seeding growth,profuse primary and secondary root development,increase soil microbial activity, higher nutrition uptake, better branching and increased foliage, reduction in the fruit and flower drop etc. It can be mixed with all types of Pesticides/ fungicide and PGR products.');
$newProd->setImage('img/products/s-parmanu.jpg');
$newProd->setAvailable('<b>5 gm, 25 gm</b> and <b>50gm </b>pouch packsize.');
$products[] = $newProd;
/********************************************************************************/
//01
/********************************************************************************/
$newProd = new Product();
$newProd->setName('Bio-Grow');
$newProd->setDescription('Biddy Bio-Grow is 100 % natural and enriched organic plant bio-stimulant and safe to use. It promotes uptake of nutrients and improves crop quality. It increases plant resistance to pest and disease. Biddy bio-grow increase drought tolerance of the soil and plant.It can be mix with all types of Pesticides/ fungicide and PGR products.');
$newProd->setImage('img/products/s-biogrow.jpg');
$newProd->setAvailable('<b>5 gm, 25 gm </b>and <b>50 gm </b>pouch packsize.');
$products[] = $newProd;
/********************************************************************************/
//02
/********************************************************************************/
$newProd = new Product();
$newProd->setName('MAXO');
$newProd->setDescription('Maxo is a combination of humic acid and nb based latest formula derived from the natural extracts fortified with vitamin, plant hormones, enzymes etc. MAXO stimulates the enzyme process in plants that results into adequate and proportional quantities. It helps in early sprouting of seeds and can be developed quickly in constant rate. It rectifies the deficiency of the plants, adding more shine and grow to the fruit size. It protects the plants against adverse condition and stops shedding of leaves, flowers, buds,fruit etc.');
$newProd->setImage('img/products/s-maxo.jpg');
$newProd->setAvailable('<b>100 ml, 250 ml, 500 ml </b>and <b>1 ltr </b> per bottle.');
$products[] = $newProd;
/********************************************************************************/
//03
/********************************************************************************/
$newProd = new Product();
$newProd->setName('KILLER POWER');
$newProd->setDescription('Killer power is a product based on enhanced bio-technlogical research. It saves plants against all types of larva in the crops. It is safe to use and can be mixed with all tupes of fungicides/ pesticides and PGR products.');
$newProd->setImage('img/products/s-killerpower.jpg');
$newProd->setAvailable('<b>6 ml, 15 ml, 24 ml </b>and <b>60ml</b> packsize.');
$products[] = $newProd;
/********************************************************************************/
//04
/********************************************************************************/
$newProd = new Product();
$newProd->setName('Tonix');
$newProd->setDescription('Biddy TONIX is a biotechnological flowering stimulant that serves as a booster for all crops. Biddy TONIX positively influences on the several physiological functions in the plant systems which leads to increase in cell division & enlargement. It is very useful for faster plant improvement, more flowers, leafs and branches. It can be mixed with all types of pesticides/ fungicides and PGR products.');
$newProd->setImage('img/products/s-tonix.jpg');
$newProd->setAvailable('<b>100 ml, 250 ml, 500 ml </b>and <b>1 ltr </b>per bottle.');
$products[] = $newProd;
/********************************************************************************/
//05
/********************************************************************************/
$newProd = new Product();
$newProd->setName('Mantra');
$newProd->setDescription('Mantra is plant growth stimulator. It is helpful for plants to gain more micronutrients from soil. It inncreases nutrient uptake in soil application, decrease toxins, water retention, improves microbial growth and is better over soil structure. It can be mixed with all types of Pesticides/ fungicide and PGR products.');
$newProd->setImage('img/products/s-mantra.jpg');
$newProd->setAvailable('<b>100 ml, 250ml, 500 ml </b>and <b>1 ltr</b> pet bottle.');
$products[] = $newProd;
/********************************************************************************/
//06
/********************************************************************************/
$newProd = new Product();
$newProd->setName('Cross HD');
$newProd->setDescription('CROSS HD induces naturally occuring alkaloids lactones and growth promoting enzymes. It is safer for crops and it improves overall health of the plants. It saves plants from hazardous sucking insect pest particularly thrips, leafhoppers,mites etc.');
$newProd->setImage('img/products/s-crosshd.jpg');
$newProd->setAvailable('<b>2 ml </b> packsize.');
$products[] = $newProd;
/********************************************************************************/
//07
/********************************************************************************/
$newProd = new Product();
$newProd->setName('Shakti');
$newProd->setDescription('SHAKTI 50 G is a growth promoting agent for soil application. It is pure and natural and can be used on all types of vegetables, cotton, horticulture crops and field crops and can be mixed with all type of fertilizers, organic or inorganic.');
$newProd->setImage('img/products/s-shakti.jpg');
$newProd->setAvailable('<b>1 kg </b>HDPE jar packing size.');
$products[] = $newProd;
/********************************************************************************/
//08
/********************************************************************************/
$newProd = new Product();
$newProd->setName('Rango');
$newProd->setDescription('RANGO is a silicon based spreader and is a unique product that helps to reduce input cost by minimizing wastage and enhances the efficacy of pesticides/ fungicide and any PGR products.');
$newProd->setImage('img/products/s-rango.jpg');
$newProd->setAvailable('<b>10 ml</b> and <b>25 ml.</b> pack size');
$products[] = $newProd;
/********************************************************************************/
//09
/********************************************************************************/
$newProd = new Product();
$newProd->setName('Ninja Power');
$newProd->setDescription('NINJA POWER is a product based on advanced Italian technology. It has excellent wetting and spreading property. It helps in uniform distribution,increase penetration, helps in quick drying and it enhances sticking & spreading power . It can be mixed with all types of fungicides/ pesticides and PGR products.');
$newProd->setImage('img/products/s-ninjapower.jpg');
$newProd->setAvailable('<b>10 ml</b> and<b>20 ml </b>packsize.');
$products[] = $newProd;
/********************************************************************************/
//10
/********************************************************************************/
$newProd = new Product();
$newProd->setName('Giba');
$newProd->setDescription('GIBA is highly sepecialized plant growth ntrient. Giba induce seed germination, promote shoot growth and internode elogation, determine the sex expression of plant, and it is involved in promoting the flowering of plants. Giba is available in 10 ml pack size only..');
$newProd->setImage('img/products/s-giba.jpg');
$newProd->setAvailable('10 ml pack size only');
$products[] = $newProd;
/********************************************************************************/
//11
/********************************************************************************/
$newProd = new Product();
$newProd->setName('Sticko');
$newProd->setDescription('STICKO has an excellent wetting property, it helps in uniform distribution, increases penetration, helps in quick drying and it enhances sticking power. It can be mixed with all types of fungicides/ pesticides and PGR products.');
$newProd->setImage('img/products/s-sticko.jpg');
$newProd->setAvailable('<b>50ml, 100 ml, 250 ml </b>etc.');
$products[] = $newProd;
/********************************************************************************/
//12
/********************************************************************************/
$newProd = new Product();
$newProd->setName('Fungi plus');
$newProd->setDescription('Fungi plus is a highly specialized bio-derivative which provides excellent action for fungal infection like downy mildue, antracrose, ring spot, powdery mildue etc in crops. It can be mixed with all types of fungicides/ pesticides and PGR products.');
$newProd->setImage('img/products/s-fungiplus.jpg');
$newProd->setAvailable('<b>25 ml, 50 ml, 100 ml</b> and <b>250 ml</b> size.');
$products[] = $newProd;
/********************************************************************************/
//13
/********************************************************************************/
$newProd = new Product();
$newProd->setName('Panther');
$newProd->setDescription('Panther is a product based on enhanced bio-technlogical research. It
saves plants against all types of larva, army worm, boll worm, root worm, pink ball worm,
heliothis and spodoptera in all crops. It is safe to use. It can be mixed with all types
of fungicides/ pesticides and PGR products.');
$newProd->setImage('img/products/s-panther.jpg');
$newProd->setAvailable('<b> 50 ml, 100 ml, 250 ml</b> packsize.');
$products[] = $newProd;
/********************************************************************************/
//14
/********************************************************************************/
$newProd = new Product();
$newProd->setName('Chetak Super 30');
$newProd->setDescription('Biddy CHETAK Super is highly recommended to control weed and insect for
cotton, vegetables and other crops. It saves plant against white fly. It has no hazardous
chemicals which can cause problems to the environment.');
$newProd->setImage('img/products/s-chetak.jpg');
$newProd->setAvailable('<b>6 ml, 15 ml, 24 ml </b>and 60ml packsize.');
$products[] = $newProd;
/********************************************************************************/
//15
/********************************************************************************/
$newProd = new Product();
$newProd->setName('Cross');
$newProd->setDescription('CROSS induces naturally occuring alkaloids lactones and growth promoting enzymes. It is safer to crops and it improves overall helth of the plants. It save plants from hazardous sucking  insect pest particularly Thrips, leafhoppers,mites etc. ');
$newProd->setImage('img/products/s-cross.jpg');
$newProd->setAvailable(' <b>20 ml</b> packsize.');
$products[] = $newProd;
/********************************************************************************/
//16
/********************************************************************************/
$newProd = new Product();
$newProd->setName('Shera');
$newProd->setDescription("Biddy's SHERA is a product based on advanced bio technlogical research containing highly specialized bio-derivative and can be useful in the appropriate scientific concentration which gives the excellent action for pest management in all agricultural crops. It is eco-friendly in nature and can target pest like thrips, mites, jesid etc.");
$newProd->setImage('img/products/s-shera.jpg');
$newProd->setAvailable('<b>50 ml, 100ml, 250 ml, 500 ml </b>packing size.');
$products[] = $newProd;
/********************************************************************************/
//17
/********************************************************************************/
$newProd = new Product();
$newProd->setName('Manka');
$newProd->setDescription('Manka is a micronutrient bio-fertilizer. It has longer self life and is a growth promoting agent useful in root development. It can be mixed with all types of pesticides/ fungicides and PGR products.');
$newProd->setImage('img/products/s-manka.jpg');
$newProd->setAvailable('<b>250ml, 500 ml </b>and <b>1 ltr </b>per bottle.');
$products[] = $newProd;
/********************************************************************************/
//18
/********************************************************************************/
$newProd = new Product();
$newProd->setName('Micro Plus');
$newProd->setDescription('Micro Plus is a Micronutrient type plant growth nutrient. Micro Plus has longer self life, growth promoting agent and useful in root and fruit development and setting.');
$newProd->setImage('img/products/s-microplus.jpg');
$newProd->setAvailable('10 gm pouches for 15 ltr of water.');
$products[] = $newProd;
/********************************************************************************/
//19
/********************************************************************************/
$newProd = new Product();
$newProd->setName('Vitara Magic');
$newProd->setDescription('Vitara Magic is a highly specialized bio-derivative which gives the excellent action for the fungal infection like Downy mildue, Antracrose, Ring spot, powdery mildue, dark spot viral and wilt in all crops. It can be mix with all types of fungicides/ pesticides and PGR products.');
$newProd->setImage('img/products/s-vitaramagic.jpg');
$newProd->setAvailable('<b>50 gm, 100 gm, 250 gm</b> packing size.');
$products[] = $newProd;
/********************************************************************************/

$str = "<div class='container'>
<div class='row'>
  <div class='col'><br>
    <img src='" . $products[(int)$_POST['index']]->image . "' alt='kalita'>
  </div>
  <div class='col'>
    <h3>" . $products[(int)$_POST['index']]->name . "</h3>
    <h6>Description</h6>
    <p>" . $products[(int)$_POST['index']]->description . "</p>
    <h6>Available In</h6>
    <p>" . $products[(int)$_POST['index']]->available . "</p>
  </div>
</div>
</div>";
echo $str;
