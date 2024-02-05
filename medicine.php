<?php
    include_once'header.php';
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Responsive Product Medicine | with quick Popup View</title>
        <link rel="stylesheet" href="css/medicine.css"> 
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">   
    </head>
    <body>
        <input type="radio" name="Photos" id="check1" checked>
        <input type="radio" name="Photos" id="check2">
        <input type="radio" name="Photos" id="check3">
        <input type="radio" name="Photos" id="check4">
        <input type="radio" name="Photos" id="check5">
        <input type="radio" name="Photos" id="check6">
        <div class="container">
            <div class="top-content">
                <h3> Medicines</h3>
                <label for="check1">All Medicines</label>
                <label for="check2">Antibiotics</label>
                <label for="check3">Coughing</label>
                <label for="check4">Diarrhea</label>
                <label for="check5">Fever</label>
                <label for="check6">Vitamins</label>
            </div>
            <div class="product">
                <div class="product-card antibio">
                    <h2 class="name">Amoxicilin-Bendex</h2>
                    <span class="price">₱ 48.85</span>
                    <a class="popup-btn">View Info</a>
                    <img src="mimg/antibio1.png" class="product-img"alt="">
                </div>
                <div class="popup-view">
                    <div class="popup-card">
                        <a><i class="fas fa-times close-btn"></i></a>
                        <div class="product-img">
                            <img src="immg/antibio1.png"alt="">
                        </div>
                        <div class="info">
                            <h2>Amoxicilin-Bendex</h2><span>Antibiotics</span>
                            <p>Indications: Infections caused by susceptible strains of Gram-positive and Gram-negative organisms.
        
                                Contraindications: Contraindicated in patients known to be sensitive Penicillin V therapy.</p>
                                <span class="price">₱ 48.85</span>                              
                        </div>
                    </div>
                </div>
            </div>
            <div class="product">
                <div class="product-card antibio">
                    <h2 class="name">Amoxicilin-Capsul</h2>
                    <span class="price">₱ 30.85</span>
                    <a class="popup-btn">View Info</a>
                    <img src="mimg/antibio2.png" class="product-img"alt="">
                </div>
                <div class="popup-view">
                    <div class="popup-card">
                        <a><i class="fas fa-times close-btn"></i></a>
                        <div class="product-img">
                            <img src="mimg/antibio2.png"alt="">
                        </div>
                        <div class="info">
                            <h2>Amoxicilin-Capsul</h2><span>Antibiotics</span>
                            <p>Indications: Infections caused by susceptible strains of Gram-positive and Gram-negative organisms.
        
                                Contraindications: Contraindicated in patients known to be sensitive Penicillin V therapy.</p>
                                <span class="price">₱ 30.85</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product">
                <div class="product-card antibio">
                    <h2 class="name">Co-Amoxiclav</h2>
                    <span class="price">₱ 47.00</span>
                    <a class="popup-btn">View Info</a>
                    <img src="mimg/antibio3.png" class="product-img"alt="">
                </div>
                <div class="popup-view">
                    <div class="popup-card">
                        <a><i class="fas fa-times close-btn"></i></a>
                        <div class="product-img">
                            <img src="mimg/antibio3.png"alt="">
                        </div>
                        <div class="info">
                            <h2>Co-Amoxiclav</h2><span>Antibiotics</span>
                            <p>Co-amoxiclav is given to treat bacterial infections. It is prescribed for sinus infections, urine infections, skin infections, 
                                joint infections and some dental infections. It is also given before some surgical operations, to prevent an infection from developing.</p>
                                <span class="price">₱ 47.00</span>   
                        </div>
                    </div>
                </div>
            </div>
            <div class="product">
                <div class="product-card antibio">
                    <h2 class="name">Cefalexin-Zelexin</h2>
                    <span class="price">₱ 44.00</span>
                    <a class="popup-btn">View Info</a>
                    <img src="mimg/antibio4.png" class="product-img"alt="">
                </div>
                <div class="popup-view">
                    <div class="popup-card">
                        <a><i class="fas fa-times close-btn"></i></a>
                        <div class="product-img">
                            <img src="mimg/antibio4.png"alt="">
                        </div>
                        <div class="info">
                            <h2>Cefalexin-Zelexin</h2><span>Antibiotics</span>
                            <p>It's used to treat bacterial infections, such as pneumonia and other chest infections, skin infections and urinary tract infections (UTIs).</p>
                                <span class="price">₱ 44.00</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product">
                <div class="product-card antibio">
                    <h2 class="name">Cefaclor</h2>
                    <span class="price">₱ 630.00</span>
                    <a class="popup-btn">View Info</a>
                    <img src="mimg/antibio5.png" class="product-img"alt="">
                </div>
                <div class="popup-view">
                    <div class="popup-card">
                        <a><i class="fas fa-times close-btn"></i></a>
                        <div class="product-img">
                            <img src="mimg/antibio5.png"alt="">
                        </div>
                        <div class="info">
                            <h2>Cefaclor</h2><span>Antibiotics</span>
                            <p>Cefaclor is used to treat certain infections caused by bacteria, 
                                such as pneumonia and other lower respiratory tract (lung) infections; 
                                and infections of the skin, ears, throat, tonsils, and urinary tract.</p>
                                <span class="price">₱ 630.00</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product">
                <div class="product-card antibio">
                    <h2 class="name">Cloxacillin Sodium</h2>
                    <span class="price">₱ 17.00</span>
                    <a class="popup-btn">View Info</a>
                    <img src="mimg/antibio6.png" class="product-img"alt="">
                </div>
                <div class="popup-view">
                    <div class="popup-card">
                        <a><i class="fas fa-times close-btn"></i></a>
                        <div class="product-img">
                            <img src="mimg/antibio6.png"alt="">
                        </div>
                        <div class="info">
                            <h2>Cloxacillin Sodium</h2><span>Antibiotics</span>
                            <p>Cloxacillin is used to treat a wide variety of bacterial infections. 
                                This medication is a type of penicillin antibiotic. 
                                It works by stopping the growth of bacteria.</p>
                                <span class="price">₱ 17.00</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product">
                <div class="product-card cough">
                    <h2 class="name">Robitussin-Dm</h2>
                    <span class="price">₱ 173.00</span>
                    <a class="popup-btn">View Info</a>
                    <img src="mimg/cough1.png" class="product-img"alt="">
                </div>
                <div class="popup-view">
                    <div class="popup-card">
                        <a><i class="fas fa-times close-btn"></i></a>
                        <div class="product-img">
                            <img src="mimg/cough1.png"alt="">
                        </div>
                        <div class="info">
                            <h2>Robitussin-Dm</h2><span>Coughing</span>
                            <p>Robitussin DM contains two active ingredients: dextromethorphan and guaifenesin. 
                                Dextromethorphan is an antitussive drug used to help relieve constant coughing. 
                                It helps stop your cough by decreasing activity in your brain that triggers your impulse to cough.</p>
                                <span class="price">₱ 173.00</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product">
                <div class="product-card cough">
                    <h2 class="name">Robitussin-SoftgelCapsul</h2>
                    <span class="price">₱ 253.00</span>
                    <a class="popup-btn">View Info</a>
                    <img src="mimg/cough2.png" class="product-img"alt="">
                </div>
                <div class="popup-view">
                    <div class="popup-card">
                        <a><i class="fas fa-times close-btn"></i></a>
                        <div class="product-img">
                            <img src="mimg/cough2.png"alt="">
                        </div>
                        <div class="info">
                            <h2>Robitussin-SoftgelCapsul</h2><span>Coughing</span>
                            <p> Guaifenesin (Robitussin) provides symptomatic relief from congested chests which may be 
                                associated with the common cold and increase the flow of natural secretions along the lower respiratory tract. 
                                It is also used to reduce sticky phlegm.</p>
                                <span class="price">₱ 253.00</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product">
                <div class="product-card cough">
                    <h2 class="name">Plemex-Lagundi</h2>
                    <span class="price">₱ 162.00</span>
                    <a class="popup-btn">View Info</a>
                    <img src="mimg/cough3.png" class="product-img"alt="">
                </div>
                <div class="popup-view">
                    <div class="popup-card">
                        <a><i class="fas fa-times close-btn"></i></a>
                        <div class="product-img">
                            <img src="mimg/cough3.png"alt="">
                        </div>
                        <div class="info">
                            <h2>Plemex-Lagundi</h2><span>Coughing</span>
                            <p> Relief of cough due to common cold, flu & mild to moderate bronchitis; cough of bacterial origin; relief of reversible, 
                                mild to moderate bronchospasm in adult & childn w/ obstructive airway disease eg asthma, 
                                chronic bronchitis & other broncho-pulmonary disorders.</p>
                                <span class="price">₱ 162.00</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product">
                <div class="product-card cough">
                    <h2 class="name">Tuseran Forte-Capsul</h2>
                    <span class="price">₱ 200.00</span>
                    <a class="popup-btn">View Info</a>
                    <img src="mimg/cough4.png" class="product-img"alt="">
                </div>
                <div class="popup-view">
                    <div class="popup-card">
                        <a><i class="fas fa-times close-btn"></i></a>
                        <div class="product-img">
                            <img src="mimg/cough4.png"alt="">
                        </div>
                        <div class="info">
                            <h2>Tuseran Forte-Capsul</h2><span>Coughing</span>
                            <p> Tuseran Forte is used for the relief of cough, clogged nose, 
                                postnasal drip, headache, body aches, and fever associated with the common cold, 
                                allergic rhinitis, sinusitis, flu, and other minor respiratory tract infections.</p>
                                <span class="price">₱ 200.00</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product">
                <div class="product-card cough">
                    <h2 class="name">Solmux Advane</h2>
                    <span class="price">₱ 260.00</span>
                    <a class="popup-btn">View Info</a>
                    <img src="mimg/cough5.png" class="product-img"alt="">
                </div>
                <div class="popup-view">
                    <div class="popup-card">
                        <a><i class="fas fa-times close-btn"></i></a>
                        <div class="product-img">
                            <img src="mimg/cough5.png"alt="">
                        </div>
                        <div class="info">
                            <h2>Solmux Advane</h2><span>Coughing</span>
                            <p>Causes phlegm to melt, making it easier to cough up and expel.
                                Reduces and removes bacteria in phlegm.
                                Stops excess production of phlegm.
                                Zinc helps boost immunity.
                                Functions as an antioxidant.</p>
                                <span class="price">₱ 260.00</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product">
                <div class="product-card cough">
                    <h2 class="name">Vicks Formula 44</h2>
                    <span class="price">₱ 164.00</span>
                    <a class="popup-btn">View Info</a>
                    <img src="mimg/cough6.png" class="product-img"alt="">
                </div>
                <div class="popup-view">
                    <div class="popup-card">
                        <a><i class="fas fa-times close-btn"></i></a>
                        <div class="product-img">
                            <img src="mimg/cough6.png"alt="">
                        </div>
                        <div class="info">
                            <h2>Vicks Formula 44</h2><span>Coughing</span>
                            <p>This combination product is used for the temporary relief of cough, sneezing, 
                                or runny nose due to the common cold, hay fever or other upper respiratory allergies.</p>
                                <span class="price">₱ 164.00</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product">
                <div class="product-card diarrhea">
                    <h2 class="name">Loperamide-Diatabs</h2>
                    <span class="price">₱ 11.20</span>
                    <a class="popup-btn">View Info</a>
                    <img src="mimg/diarrhea1.png" class="product-img"alt="">
                </div>
                <div class="popup-view">
                    <div class="popup-card">
                        <a><i class="fas fa-times close-btn"></i></a>
                        <div class="product-img">
                            <img src="mimg/diarrhea1.png"alt="">
                        </div>
                        <div class="info">
                            <h2>Loperamide-Diatabs</h2><span>Diarrhea</span>
                            <p> Control and symptomatic relief of: acute non-specific diarrhea, 
                                chronic diarrhea associated with inflammatory bowel disease. 
                                Reduction of number and volume of discharge in patients with ileostomies and colostomies.</p>
                                <span class="price">₱ 11.20</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product">
                <div class="product-card diarrhea">
                    <h2 class="name">Imodium-Tablet</h2>
                    <span class="price">₱ 17.00</span>
                    <a class="popup-btn">View Info</a>
                    <img src="mimg/diarrhea2.png" class="product-img"alt="">
                </div>
                <div class="popup-view">
                    <div class="popup-card">
                        <a><i class="fas fa-times close-btn"></i></a>
                        <div class="product-img">
                            <img src="mimg/diarrhea2.png"alt="">
                        </div>
                        <div class="info">
                            <h2>Imodium-Tablet</h2><span>Diarrhea</span>
                            <p> Imodium is a prescription medicine used to treat the symptoms of acute diarrhea, 
                                chronic diarrhea and Traveler’s Diarrhea. 
                                Imodium may be used alone or with other medications.</p>
                                <span class="price">₱ 17.00</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product">
                <div class="product-card diarrhea">
                    <h2 class="name">Buscopan-Tablet</h2>
                    <span class="price">₱ 99.25</span>
                    <a class="popup-btn">View Info</a>
                    <img src="mimg/diarrhea3.png" class="product-img"alt="">
                </div>
                <div class="popup-view">
                    <div class="popup-card">
                        <a><i class="fas fa-times close-btn"></i></a>
                        <div class="product-img">
                            <img src="mimg/diarrhea3.png"alt="">
                        </div>
                        <div class="info">
                            <h2>Buscopan-Tablet</h2><span>Diarrhea</span>
                            <p>Buscopan relieves stomach cramps and period pains by helping your digestive system and bladder relax. 
                                It does this by reducing the wave-like contractions of the muscle in the walls of the stomach, bowel and bladder.</p>
                                <span class="price">₱ 99.25</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product">
                <div class="product-card diarrhea">
                    <h2 class="name">Loperamide-Imodium</h2>
                    <span class="price">₱ 17.00</span>
                    <a class="popup-btn">View Info</a>
                    <img src="mimg/diarrhea4.png" class="product-img"alt="">
                </div>
                <div class="popup-view">
                    <div class="popup-card">
                        <a><i class="fas fa-times close-btn"></i></a>
                        <div class="product-img">
                            <img src="mimg/diarrhea4.png"alt="">
                        </div>
                        <div class="info">
                            <h2>Loperamide-Imodium</h2><span>Diarrhea</span>
                            <p>To treat sudden diarrhea (including traveler's diarrhea). It works by slowing down the movement of the gut. 
                                This decreases the number of bowel movements and makes the stool less watery.</p>
                                <span class="price">₱ 17.00</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product">
                <div class="product-card diarrhea">
                    <h2 class="name">Oral Rehydration Salt</h2>
                    <span class="price">₱ 390.00</span>
                    <a class="popup-btn">View Info</a>
                    <img src="mimg/diarrhea5.png" class="product-img"alt="">
                </div>
                <div class="popup-view">
                    <div class="popup-card">
                        <a><i class="fas fa-times close-btn"></i></a>
                        <div class="product-img">
                            <img src="mimg/diarrhea5.png"alt="">
                        </div>
                        <div class="info">
                            <h2>Oral Rehydration Salt</h2><span>Diarrhea</span>
                            <p>Oral Rehydration Solution (ORS) product is used to eliminate fluids and minerals like as sodium, 
                                potassium lost due to diarrhea and vomiting. 
                                It helps to prevent or treat the loss of too much body water dehydration.</p>
                                <span class="price">₱ 390.00</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product">
                <div class="product-card diarrhea">
                    <h2 class="name">Ursodeoxycholic Acid</h2>
                    <span class="price">₱ 60.00</span>
                    <a class="popup-btn">View Info</a>
                    <img src="mimg/diarrhea6.png" class="product-img"alt="">
                </div>
                <div class="popup-view">
                    <div class="popup-card">
                        <a><i class="fas fa-times close-btn"></i></a>
                        <div class="product-img">
                            <img src="mimg/diarrhea6.png"alt="">
                        </div>
                        <div class="info">
                            <h2>Ursodeoxycholic Acid</h2><span>Diarrhea</span>
                            <p>Ursodeoxycholic acid is a bile acid found in the bile of bears (Ursidae) as a conjugate with taurine. 
                                Used therapeutically, it prevents the synthesis and absorption of cholesterol and can lead to the dissolution of gallstones.</p>
                                <span class="price">₱ 60.00</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product">
                <div class="product-card fever">
                    <h2 class="name">Paracetamol-Biogesic</h2>
                    <span class="price">₱ 3.07</span>
                    <a class="popup-btn">View Info</a>
                    <img src="mimg/fever1.png" class="product-img"alt="">
                </div>
                <div class="popup-view">
                    <div class="popup-card">
                        <a><i class="fas fa-times close-btn"></i></a>
                        <div class="product-img">
                            <img src="mimg/fever1.png"alt="">
                        </div>
                        <div class="info">
                            <h2>Paracetamol-Biogesic</h2><span>Fever</span>
                            <p> Paracetamol (Biogesic) is a medication that is typically used to relieve mild to 
                                moderate pain such as headache, backache, menstrual cramps, 
                                muscular strain, minor arthritis pain, toothache, 
                                and reduce fevers caused by illnesses such as the common cold and flu.</p>
                                <span class="price">₱ 3.07</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product">
                <div class="product-card fever">
                    <h2 class="name">Medicol-Advance</h2>
                    <span class="price">₱ 120.00</span>
                    <a class="popup-btn">View Info</a>
                    <img src="mimg/fever2.png" class="product-img"alt="">
                </div>
                <div class="popup-view">
                    <div class="popup-card">
                        <a><i class="fas fa-times close-btn"></i></a>
                        <div class="product-img">
                            <img src="mimg/fever2.png"alt="">
                        </div>
                        <div class="info">
                            <h2>Medicol-Advance</h2><span>Fever</span>
                            <p> For the relief of headache. For the relief of toothache, muscular aches, minor arthritis pain, 
                                backache, minor aches and pains associated with the common cold, and pain of menstrual cramps (dysmenorrhea).</p>
                                <span class="price">₱ 120.00</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product">
                <div class="product-card fever">
                    <h2 class="name">Paracetamol-Bioflu</h2>
                    <span class="price">₱ 7.50</span>
                    <a class="popup-btn">View Info</a>
                    <img src="mimg/fever3.png" class="product-img"alt="">
                </div>
                <div class="popup-view">
                    <div class="popup-card">
                        <a><i class="fas fa-times close-btn"></i></a>
                        <div class="product-img">
                            <img src="mimg/fever3.png"alt="">
                        </div>
                        <div class="info">
                            <h2>Paracetamol-Bioflu</h2><span>Fever</span>
                            <p> It is used for the relief of clogged nose, runny nose, postnasal drip, itchy and watery eyes, sneezing, headache, 
                                body aches and fever associated with the common cold, allergic rhinitis, 
                                sinusitis, flu and other minor respiratory tract infections.</p>
                                <span class="price">₱ 7.50</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product">
                <div class="product-card fever">
                    <h2 class="name">Neozep-Forte</h2>
                    <span class="price">₱ 40.00</span>
                    <a class="popup-btn">View Info</a>
                    <img src="mimg/fever4.png" class="product-img"alt="">
                </div>
                <div class="popup-view">
                    <div class="popup-card">
                        <a><i class="fas fa-times close-btn"></i></a>
                        <div class="product-img">
                            <img src="mimg/fever4.png"alt="">
                        </div>
                        <div class="info">
                            <h2>Neozep-Forte</h2><span>Fever</span>
                            <p> It is used for the relief of clogged nose, runny nose, postnasal drip, itchy and watery eyes, sneezing, headache, 
                                body aches and fever associated with the common cold, allergic rhinitis, 
                                sinusitis, flu and other minor respiratory tract infections.</p>
                                <span class="price">₱ 40.00</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product">
                <div class="product-card fever">
                    <h2 class="name">Paracetamol Calpol</h2>
                    <span class="price">₱ 158.00</span>
                    <a class="popup-btn">View Info</a>
                    <img src="mimg/fever5.png" class="product-img"alt="">
                </div>
                <div class="popup-view">
                    <div class="popup-card">
                        <a><i class="fas fa-times close-btn"></i></a>
                        <div class="product-img">
                            <img src="mimg/fever5.png"alt="">
                        </div>
                        <div class="info">
                            <h2>Paracetamol Calpol</h2><span>Fever</span>
                            <p> CALPOL Infant Suspension is indicated for the treatment of mild to moderate pain and as an antipyretic. 
                                It can be used in many conditions including headache, toothache, earache, teething, sore throat, colds & influenza, 
                                aches and pains and post-immunisation fever.</p>
                                <span class="price">₱ 158.00</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product">
                <div class="product-card fever">
                    <h2 class="name">Ambroxol</h2>
                    <span class="price">₱ 6.95</span>
                    <a class="popup-btn">View Info</a>
                    <img src="mimg/fever6.png" class="product-img"alt="">
                </div>
                <div class="popup-view">
                    <div class="popup-card">
                        <a><i class="fas fa-times close-btn"></i></a>
                        <div class="product-img">
                            <img src="mimg/fever6.png"alt="">
                        </div>
                        <div class="info">
                            <h2>Ambroxol</h2><span>Fever</span>
                            <p>By making the sputum thin and less viscous and quick to cough out, 
                                this medication is used to relieve the state of shortness of breath, 
                                constant cough, and inflammation of the lung airways.</p>
                                <span class="price">₱ 6.95</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product">
                <div class="product-card Vitamins">
                    <h2 class="name">Enervon-Tablet</h2>
                    <span class="price">₱ 195.00</span>
                    <a class="popup-btn">View Info</a>
                    <img src="mimg/vitamins1.png" class="product-img"alt="">
                </div>
                <div class="popup-view">
                    <div class="popup-card">
                        <a><i class="fas fa-times close-btn"></i></a>
                        <div class="product-img">
                            <img src="mimg/vitamins1.png"alt="">
                        </div>
                        <div class="info">
                            <h2>Enervon-Tablet</h2><span>Vitamins</span>
                            <p> formulated to enhance your immune system to keep you away from sickness 
                                and to help your body convert the food you eat into energy that your body can use.</p>
                                <span class="price">₱ 195.00</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product">
                <div class="product-card Vitamins">
                    <h2 class="name">Ceelin Plus-Syrup</h2>
                    <span class="price">₱ 135.00</span>
                    <a class="popup-btn">View Info</a>
                    <img src="mimg/Vitamins2.png" class="product-img"alt="">
                </div>
                <div class="popup-view">
                    <div class="popup-card">
                        <a><i class="fas fa-times close-btn"></i></a>
                        <div class="product-img">
                            <img src="mimg/Vitamins2.png"alt="">
                        </div>
                        <div class="info">
                            <h2>Ceelin Plus-Syrup</h2><span>Vitamins</span>
                            <p> Ceelin Plus helps in boosting your child's immunity so that they are protected from sickness. 
                                The body needs its daily requirement of Vitamin C and Zinc, and since the body does not produce these, 
                                it is important that kids get this from their diet.</p>
                                <span class="price">₱ 135.00</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product">
                <div class="product-card Vitamins">
                    <h2 class="name">Fern-C-Capsul</h2>
                    <span class="price">₱ 217.50</span>
                    <a class="popup-btn">View Info</a>
                    <img src="mimg/Vitamins3.png" class="product-img"alt="">
                </div>
                <div class="popup-view">
                    <div class="popup-card">
                        <a><i class="fas fa-times close-btn"></i></a>
                        <div class="product-img">
                            <img src="mimg/Vitamins3.png"alt="">
                        </div>
                        <div class="info">
                            <h2>Fern-C-Capsul</h2><span>Vitamins</span>
                            <p> One of the main reasons people take Vitamin C supplements is to boost their 
                                immunity as Vitamin C is involved in many parts of the immune system. May reduce your risk of chronic disease. 
                                Vitamin C is a powerful antioxidant that can strengthen the body's natural defenses.</p>
                                <span class="price">₱ 217.50</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product">
                <div class="product-card Vitamins">
                    <h2 class="name">Poten-Cee</h2>
                    <span class="price">₱ 140.00</span>
                    <a class="popup-btn">View Info</a>
                    <img src="mimg/Vitamins4.png" class="product-img"alt="">
                </div>
                <div class="popup-view">
                    <div class="popup-card">
                        <a><i class="fas fa-times close-btn"></i></a>
                        <div class="product-img">
                            <img src="mimg/Vitamins4.png"alt="">
                        </div>
                        <div class="info">
                            <h2>Poten-Cee</h2><span>Vitamins</span>
                            <p> helps boost immunity against colds, flu and other upper respiratory ailments1 and.
                                is essential in the production of collagen for healthy skin and hair.</p>
                                <span class="price">₱ 140.00</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product">
                <div class="product-card Vitamins">
                    <h2 class="name">Myra-E</h2>
                    <span class="price">₱ 98.00</span>
                    <a class="popup-btn">View Info</a>
                    <img src="mimg/Vitamins5.png" class="product-img"alt="">
                </div>
                <div class="popup-view">
                    <div class="popup-card">
                        <a><i class="fas fa-times close-btn"></i></a>
                        <div class="product-img">
                            <img src="mimg/Vitamins5.png"alt="">
                        </div>
                        <div class="info">
                            <h2>Myra-E</h2><span>Vitamins</span>
                            <p>Helps boost immune system; helps gives healthy skin from w/in; 
                                helps contribute to the regulation of collagen breakdown; helps increase resistance against sickness. 
                                Promotes cell & tissue renewal of the skin, heart, lungs, muscles & liver.</p>
                                <span class="price">₱ 98.00</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product">
                <div class="product-card Vitamins">
                    <h2 class="name">Forti-D</h2>
                    <span class="price">₱ 775.00</span>
                    <a class="popup-btn">View Info</a>
                    <img src="mimg/Vitamins6.png" class="product-img"alt="">
                </div>
                <div class="popup-view">
                    <div class="popup-card">
                        <a><i class="fas fa-times close-btn"></i></a>
                        <div class="product-img">
                            <img src="mimg/Vitamins6.png"alt="">
                        </div>
                        <div class="info">
                            <h2>Forti-D</h2><span>Vitamins</span>
                            <p>ti-D® helps regulate the hormones which helps our body to manage the day-to-day stress that it experiences. 
                                It also helps improve mood quality, and helps prevent overfatigue and exhaustion. 
                                At night, it also helps improve sleep quality.</p>
                                <span class="price">₱ 775.00</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script type="text/javascript">
            var popupViews = document.querySelectorAll('.popup-view');
            var popupBtns = document.querySelectorAll('.popup-btn');
            var closeBtns = document.querySelectorAll('.close-btn');

            var popup=function(popupClick){
                popupViews[popupClick].classList.add('active');
            }
            popupBtns.forEach((popupBtn, i )=>{
                popupBtn.addEventListener("click",()=>{
                    popup(i);
                });
            });

            closeBtns.forEach((closeBtn)=>{
                closeBtn.addEventListener("click",()=>{
                    popupViews.forEach((popupView)=>{
                        popupView.classList.remove('active');
                    });
                });
            });
        </script>
    </body>
</html>
<?php
    include_once'chatbot.php';
?>
<?php
    include_once'footer.php';
?>