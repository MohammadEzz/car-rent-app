<?php

use Illuminate\Support\Facades\DB;

const CAR_OPTIONS = [
    [
        'id' => 1,
        'option_value' => 'Acura',
        'models' => ['Integra', 'Legend', 'NSX', 'Vigor', 'TL', 'RL', 'SLX', 'CL', 'MDX', 'RSX', 'TSX', 'RDX', 'ZDX', 'ILX', 'RLX', 'RLX Sport Hybrid', 'TLX', 'MDX Sport Hybrid']
    ],
    [
        'id' => 2,
        'option_value' => 'Alfa Romeo',
        'models' => ['164', 'Spider', '4C', '4C Spider', 'Giulia', 'Stelvio', 'Tonale']
    ],
    [
        'id' => 3,
        'option_value' => 'Aston Martin',
        'models' => ['DB9', 'Vanquish S', 'Vantage', 'DBS', 'Rapide', 'Virage', 'Rapide S', 'Vanquish', 'DB9 GT', 'DB11', 'DBS Superleggera', 'DBX']
    ],
    [
        'id' => 4,
        'option_value' => 'Audi',
        'models' => ['100', '80', 'Quattro', 'S4', '90', 'Cabriolet', 'A6', 'S6', 'A4', 'A8', 'TT', 'allroad', 'S8', 'RS 6', 'A4 (2005.5)', 'S4 (2005.5)', 'A3', 'Q7', 'RS 4', 'A5', 'R8', 'S5', 'Q5', 'A7', 'RS 5', 'S7', 'RS 7', 'SQ5', 'Q3', 'S3', 'A3 Sportback e-tron', 'A4 allroad', 'A5 Sport', 'RS 3', 'e-tron', 'Q8', 'A6 allroad', 'e-tron Sportback', 'Q5 Sportback', 'RS Q8', 'SQ5 Sportback', 'SQ7', 'SQ8', 'e-tron GT', 'e-tron S', 'e-tron S Sportback', 'Q4 e-tron', 'Q4 Sportback e-tron', 'RS e-tron GT']
    ],
    [
        'id' => 5,
        'option_value' => 'Bentley',
        'models' => ['Arnage', 'Continental', 'Azure', 'Brooklands', 'Azure T', 'Mulsanne', 'Flying Spur', 'Bentayga', 'Continental GT']
    ],
    [
        'id' => 6,
        'option_value' => 'BMW',
        'models' => ['3 Series', '5 Series', '7 Series', '8 Series', 'M5', 'M3', 'Z3', 'M', 'X5', 'Z8', 'Z4', '6 Series', 'X3', 'M6', 'Z4 M', 'Alpina B7', '1 Series', 'X6', 'X5 M', 'X6 M', 'X1', '2 Series', '4 Series', 'i3', 'i8', 'M4', 'X4', 'M2', 'X2', 'X7', 'X3 M', 'M8', 'X4 M', 'i4', 'iX', 'i7']
    ],
    [
        'id' => 7,
        'option_value' => 'Buick',
        'models' => ['Century', 'LeSabre', 'Park Avenue', 'Regal', 'Riviera', 'Roadmaster', 'Skylark', 'Rendezvous', 'Rainier', 'LaCrosse', 'Terraza', 'Lucerne', 'Enclave', 'Verano', 'Encore', 'Cascada', 'Envision', 'Regal Sportback', 'Regal TourX', 'Encore GX']
    ],
    [
        'id' => 8,
        'option_value' => 'Cadillac',
        'models' => ['Allante', 'Brougham', 'DeVille', 'Eldorado', 'Fleetwood', 'Seville', 'Sixty Special', 'Catera', 'Escalade', 'Escalade EXT', 'CTS', 'Escalade ESV', 'SRX', 'XLR', 'STS', 'DTS', 'ATS', 'XTS', 'ELR', 'ATS-V', 'CT6', 'CTS-V', 'XT5', 'CT6-V', 'XT4', 'CT4', 'CT5', 'XT6', 'LYRIQ']
    ],
    [
        'id' => 9,
        'option_value' => 'Chevrolet',
        'models' => ['1500 Extended Cab', '1500 Regular Cab', '2500 Extended Cab', '2500 Regular Cab', '3500 Crew Cab', '3500 Extended Cab', '3500 Regular Cab', 'APV Cargo', 'Astro Cargo', 'Astro Passenger', 'Beretta', 'Blazer', 'Camaro', 'Caprice', 'Cavalier', 'Corsica', 'Corvette', 'G-Series G10', 'G-Series G20', 'G-Series G30', 'Lumina', 'Lumina APV', 'S10 Blazer', 'S10 Extended Cab', 'S10 Regular Cab', 'Sportvan G10', 'Sportvan G20', 'Sportvan G30', 'Suburban 1500', 'Suburban 2500', 'Caprice Classic', 'Impala', 'Lumina Cargo', 'Lumina Passenger', '3500 HD Extended Cab', '3500 HD Regular Cab', 'Monte Carlo', 'Tahoe', '2500 HD Extended Cab', 'Express 1500 Passenger', 'Express 2500 Passenger', 'Express 3500 Passenger', 'G-Series 1500', 'G-Series 2500', 'G-Series 3500', 'Malibu', 'Venture Passenger', 'Metro', 'Prizm', 'Tracker', 'Venture Cargo', '2500 Crew Cab', '2500 HD Regular Cab', 'Express 1500 Cargo', 'Express 2500 Cargo', 'Express 3500 Cargo', 'Silverado 1500 Extended Cab', 'Silverado 1500 Regular Cab', 'Silverado 2500 Extended Cab', 'Silverado 2500 HD Extended Cab', 'Silverado 2500 HD Regular Cab', 'Silverado 2500 Regular Cab', 'Tahoe (New)', 'S10 Crew Cab', 'Silverado 1500 HD Crew Cab', 'Silverado 2500 HD Crew Cab', 'Silverado 3500 Crew Cab', 'Silverado 3500 Extended Cab', 'Silverado 3500 Regular Cab', 'Avalanche 1500', 'Avalanche 2500', 'TrailBlazer', 'SSR', 'Aveo', 'Classic', 'Colorado Crew Cab', 'Colorado Extended Cab', 'Colorado Regular Cab', 'Silverado 1500 Crew Cab', 'Silverado 2500 Crew Cab', 'Cobalt', 'Equinox', 'Uplander Cargo', 'Uplander Passenger', 'HHR', 'Avalanche', 'Silverado (Classic) 1500 Crew Cab', 'Silverado (Classic) 1500 Extended Cab', 'Silverado (Classic) 1500 HD Crew Cab', 'Silverado (Classic) 1500 Regular Cab', 'Silverado (Classic) 2500 HD Crew Cab', 'Silverado (Classic) 2500 HD Extended Cab', 'Silverado (Classic) 2500 HD Regular Cab', 'Silverado (Classic) 3500 Crew Cab', 'Silverado (Classic) 3500 Extended Cab', 'Silverado (Classic) 3500 Regular Cab', 'Silverado 3500 HD Crew Cab', 'Silverado 3500 HD Extended Cab', 'Silverado 3500 HD Regular Cab', 'Malibu (Classic)', 'Traverse', 'Cruze', 'Volt', 'Captiva Sport', 'Sonic', 'Spark', 'Impala Limited', 'Silverado 1500 Double Cab', 'Spark EV', 'SS', 'City Express', 'Silverado 2500 HD Double Cab', 'Silverado 3500 HD Double Cab', 'Suburban', 'Trax', 'Cruze Limited', 'Malibu Limited', 'Suburban 3500HD', 'Bolt EV', 'Silverado 1500 LD Double Cab', 'Bolt EUV', 'Silverado 1500 Limited Crew Cab', 'Silverado 1500 Limited Double Cab', 'Silverado 1500 Limited Regular Cab', 'Blazer EV', 'Equinox EV', 'Silverado EV']
    ],
    [
        'id' => 10,
        'option_value' => 'Chrysler',
        'models' => ['Fifth Ave', 'Imperial', 'LeBaron', 'New Yorker', 'Town & Country', 'Concorde', 'LHS', 'Cirrus', 'Sebring', '300', '300M', 'Grand Voyager', 'Voyager', 'Prowler', 'PT Cruiser', 'Crossfire', 'Pacifica', 'Aspen', '200', 'Pacifica Hybrid']
    ],
    [
        'id' => 11,
        'option_value' => 'Daewoo',
        'models' => ['Lanos', 'Leganza', 'Nubira']
    ],
    [
        'id' => 12,
        'option_value' => 'Daihatsu',
        'models' => ['Charade', 'Rocky']
    ],
    [
        'id' => 13,
        'option_value' => 'Dodge',
        'models' => ['Caravan Cargo', 'Caravan Passenger', 'Colt', 'D150 Club Cab', 'D150 Regular Cab', 'D250 Club Cab', 'D250 Regular Cab', 'D350 Club Cab', 'D350 Regular Cab', 'Dakota Club Cab', 'Dakota Regular Cab', 'Daytona', 'Dynasty', 'Grand Caravan Passenger', 'Monaco', 'Ram 50 Regular Cab', 'Ram Van B150', 'Ram Van B250', 'Ram Van B350', 'Ram Wagon B150', 'Ram Wagon B250', 'Ram Wagon B350', 'Ramcharger', 'Shadow', 'Spirit', 'Stealth', 'Viper', 'Intrepid', 'Ram 1500 Regular Cab', 'Ram 2500 Regular Cab', 'Ram 3500 Regular Cab', 'Avenger', 'Neon', 'Ram 1500 Club Cab', 'Ram 2500 Club Cab', 'Ram 3500 Club Cab', 'Ram Van 1500', 'Ram Van 2500', 'Ram Van 3500', 'Ram Wagon 1500', 'Ram Wagon 2500', 'Ram Wagon 3500', 'Stratus', 'Durango', 'Ram 1500 Quad Cab', 'Ram 2500 Quad Cab', 'Ram 3500 Quad Cab', 'Dakota Quad Cab', 'Grand Caravan Cargo', 'Sprinter 2500 Cargo', 'Sprinter 2500 Passenger', 'Sprinter 3500 Cargo', 'Magnum', 'Charger', 'Ram 1500 Mega Cab', 'Ram 2500 Mega Cab', 'Ram 3500 Mega Cab', 'Caliber', 'Nitro', 'Challenger', 'Dakota Crew Cab', 'Dakota Extended Cab', 'Journey', 'Ram 1500 Crew Cab', 'Ram 2500 Crew Cab', 'Ram 3500 Crew Cab', 'Dart', 'Hornet']
    ],
    [
        'id' => 14,
        'option_value' => 'Eagle',
        'models' => ['Premier', 'Summit', 'Talon', 'Vision']
    ],
    [
        'id' => 15,
        'option_value' => 'Ferrari',
        'models' => ['612 Scaglietti', 'F430', '599 GTB Fiorano', '430 Scuderia', 'California', '458 Italia', '599 GTO', 'FF', '458 Spider', 'F12berlinetta', '458 Speciale', '488 GTB', '488 Spider', 'GTC4Lusso', '812 Superfast', '488 Pista', '812 GTS', 'F8', 'Portofino', 'Roma', 'SF90', '296 GTB', '812 Competizione', '812 Competizione A']
    ],
    [
        'id' => 16,
        'option_value' => 'FIAT',
        'models' => ['500', '500e', '500 Abarth', '500c', '500L', '500X', '124 Spider', '500c Abarth']
    ],
    [
        'id' => 17,
        'option_value' => 'Fisker',
        'models' => ['Karma']
    ],
    [
        'id' => 18,
        'option_value' => 'Ford',
        'models' => ['Aerostar Cargo', 'Aerostar Passenger', 'Bronco', 'Club Wagon', 'Crown Victoria', 'Econoline E150 Cargo', 'Econoline E250 Cargo', 'Econoline E350 Cargo', 'Escort', 'Explorer', 'F150 Regular Cab', 'F150 Super Cab', 'F250 Regular Cab', 'F250 Super Cab', 'F350 Crew Cab', 'F350 Regular Cab', 'F350 Super Cab', 'Festiva', 'Mustang', 'Probe', 'Ranger Regular Cab', 'Ranger Super Cab', 'Taurus', 'Tempo', 'Thunderbird', 'Aspire', 'Contour', 'Windstar Cargo', 'Windstar Passenger', 'F250 Crew Cab', 'Expedition', 'Econoline E150 Passenger', 'Econoline E350 Super Duty Cargo', 'Econoline E350 Super Duty Passenger', 'F250 Super Duty Crew Cab', 'F250 Super Duty Regular Cab', 'F250 Super Duty Super Cab', 'F350 Super Duty Crew Cab', 'F350 Super Duty Regular Cab', 'F350 Super Duty Super Cab', 'Excursion', 'Explorer Sport', 'Focus', 'Escape', 'Explorer Sport Trac', 'F150 SuperCrew Cab', 'ZX2', 'E150 Passenger', 'E150 Super Duty Cargo', 'E250 Super Duty Cargo', 'E350 Super Duty Cargo', 'E350 Super Duty Passenger', 'F150 (Heritage) Regular Cab', 'F150 (Heritage) Super Cab', 'Freestar Cargo', 'Freestar Passenger', 'E150 Super Duty Passenger', 'Five Hundred', 'Freestyle', 'GT', 'Fusion', 'Edge', 'Expedition EL', 'E150 Cargo', 'E250 Cargo', 'F450 Super Duty Crew Cab', 'Taurus X', 'Flex', 'Transit Connect Cargo', 'Transit Connect Passenger', 'Fiesta', 'C-MAX Energi', 'C-MAX Hybrid', 'Focus ST', 'Fusion Energi', 'Transit 150 Van', 'Transit 150 Wagon', 'Transit 250 Van', 'Transit 350 HD Van', 'Transit 350 Van', 'Transit 350 Wagon', 'EcoSport', 'Expedition MAX', 'F450 Super Duty Regular Cab', 'Ranger SuperCab', 'Ranger SuperCrew', 'Fusion Plug-in Hybrid', 'Transit 250 Cargo Van', 'Transit 350 Passenger Van', 'Transit Connect Cargo Van', 'Transit Connect Passenger Wagon', 'Bronco Sport', 'Escape Plug-in Hybrid', 'Mustang MACH-E', 'Transit 150 Cargo Van', 'Transit 150 Crew Van', 'Transit 150 Passenger Van', 'Transit 250 Crew Van', 'Transit 350 Cargo Van', 'Transit 350 Crew Van', 'Transit 350 HD Cargo Van', 'Transit 350 HD Crew Van', 'E-Transit 350 Cargo Van', 'F150 Lightning', 'Maverick']
    ],
    [
        'id' => 19,
        'option_value' => 'Freightliner',
        'models' => ['Sprinter 2500 Cargo', 'Sprinter 2500 Crew', 'Sprinter 2500 Passenger', 'Sprinter 3500 Cargo', 'Sprinter 3500XD Cargo', 'Sprinter WORKER Cargo', 'Sprinter WORKER Passenger', 'Sprinter 1500 Cargo', 'Sprinter 1500 Passenger', 'Sprinter 3500 Crew', 'Sprinter 3500 XD Crew', 'Sprinter 4500 Cargo', 'Sprinter 4500 Crew']
    ],
    [
        'id' => 20,
        'option_value' => 'Genesis',
        'models' => ['G80', 'G90', 'G70', 'GV80', 'Electrified G80', 'GV60', 'GV70']
    ],
    [
        'id' => 21,
        'option_value' => 'Geo',
        'models' => ['Metro', 'Prizm', 'Storm', 'Tracker']
    ],
    [
        'id' => 22,
        'option_value' => 'GMC',
        'models' => ['1500 Club Coupe', '1500 Regular Cab', '2500 Club Coupe', '2500 Regular Cab', '3500 Club Coupe', '3500 Crew Cab', '3500 Regular Cab', 'Jimmy', 'Rally Wagon 1500', 'Rally Wagon 2500', 'Rally Wagon 3500', 'Safari Cargo', 'Safari Passenger', 'Sonoma Club Cab', 'Sonoma Regular Cab', 'Suburban 1500', 'Suburban 2500', 'Vandura 1500', 'Vandura 2500', 'Vandura 3500', 'Yukon', 'Sonoma Club Coupe Cab', 'Rally Wagon G2500', 'Rally Wagon G3500', 'Vandura G1500', 'Vandura G2500', 'Vandura G3500', 'Savana 1500 Cargo', 'Savana 1500 Passenger', 'Savana 2500 Cargo', 'Savana 2500 Passenger', 'Savana 3500 Cargo', 'Savana 3500 Passenger', '2500 HD Club Coupe', 'Envoy', '2500 Crew Cab', '2500 HD Extended Cab', '2500 HD Regular Cab', '3500 Extended Cab', 'Sierra 1500 Extended Cab', 'Sierra 1500 Regular Cab', 'Sierra 2500 Extended Cab', 'Sierra 2500 HD Extended Cab', 'Sierra 2500 HD Regular Cab', 'Sierra 2500 Regular Cab', 'Sonoma Extended Cab', 'Sierra (Classic) 2500 Crew Cab', 'Sierra (Classic) 2500 HD Extended Cab', 'Sierra (Classic) 2500 HD Regular Cab', 'Sierra (Classic) 3500 Crew Cab', 'Sierra (Classic) 3500 Extended Cab', 'Sierra (Classic) 3500 Regular Cab', 'Yukon Denali', 'Yukon XL 1500', 'Yukon XL 2500', 'Sierra 1500 HD Crew Cab', 'Sierra 2500 HD Crew Cab', 'Sierra 3500 Crew Cab', 'Sierra 3500 Extended Cab', 'Sierra 3500 Regular Cab', 'Sonoma Crew Cab', 'Envoy XL', 'Canyon Crew Cab', 'Canyon Extended Cab', 'Canyon Regular Cab', 'Envoy XUV', 'Sierra 1500 Crew Cab', 'Sierra 2500 Crew Cab', 'Acadia', 'Sierra (Classic) 1500 Crew Cab', 'Sierra (Classic) 1500 Extended Cab', 'Sierra (Classic) 1500 HD Crew Cab', 'Sierra (Classic) 1500 Regular Cab', 'Sierra (Classic) 2500 HD Crew Cab', 'Sierra 3500 HD Crew Cab', 'Sierra 3500 HD Extended Cab', 'Sierra 3500 HD Regular Cab', 'Terrain', 'Sierra 1500 Double Cab', 'Sierra 2500 HD Double Cab', 'Sierra 3500 HD Double Cab', 'Yukon XL', 'Acadia Limited', 'Sierra 1500 Limited Double Cab', 'Hummer EV Pickup', 'Sierra 1500 Limited Crew Cab', 'Sierra 1500 Limited Regular Cab', 'Hummer EV SUV']
    ],
    [
        'id' => 23,
        'option_value' => 'Honda',
        'models' => ['Accord', 'Civic', 'Prelude', 'del Sol', 'Passport', 'Odyssey', 'CR-V', 'Insight', 'S2000', 'Element', 'Pilot', 'Ridgeline', 'Fit', 'Accord Crosstour', 'CR-Z', 'Crosstour', 'Accord Hybrid', 'HR-V', 'Civic Type R', 'Clarity Plug-in Hybrid', 'Clarity Electric', 'Clarity Fuel Cell', 'CR-V Hybrid', 'Prologue']
    ],
    [
        'id' => 24,
        'option_value' => 'HUMMER',
        'models' => ['H1', 'H2', 'H3', 'H3T']
    ],
    [
        'id' => 25,
        'option_value' => 'Hyundai',
        'models' => ['Elantra', 'Excel', 'Scoupe', 'Sonata', 'Accent', 'Tiburon', 'Santa Fe', 'XG300', 'XG350', 'Tucson', 'Azera', 'Entourage', 'Veracruz', 'Genesis', 'Genesis Coupe', 'Equus', 'Veloster', 'Santa Fe Sport', 'Elantra GT', 'Tucson Fuel Cell', 'Sonata Hybrid', 'Sonata Plug-in Hybrid', 'Ioniq Electric', 'Ioniq Hybrid', 'Ioniq Plug-in Hybrid', 'Kona', 'Kona Electric', 'NEXO', 'Santa Fe XL', 'Palisade', 'Venue', 'Santa Fe Hybrid', 'Elantra N', 'IONIQ 5', 'Kona N', 'Santa Cruz', 'Santa Fe Plug-in Hybrid', 'Tucson Hybrid', 'Tucson Plug-in Hybrid', 'Elantra Hybrid', 'IONIQ 6', 'IONIQ 7']
    ],
    [
        'id' => 26,
        'option_value' => 'INFINITI',
        'models' => ['G', 'M', 'Q', 'J', 'I', 'QX', 'FX', 'EX', 'JX', 'Q50', 'Q60', 'Q70', 'QX50', 'QX60', 'QX70', 'QX80', 'Q40', 'QX30', 'QX55']
    ],
    [
        'id' => 27,
        'option_value' => 'Isuzu',
        'models' => ['Amigo', 'Impulse', 'Regular Cab', 'Rodeo', 'Spacecab', 'Stylus', 'Trooper', 'Hombre Regular Cab', 'Oasis', 'Hombre Spacecab', 'VehiCROSS', 'Rodeo Sport', 'Axiom', 'Ascender', 'i-280 Extended Cab', 'i-350 Crew Cab', 'i-290 Extended Cab', 'i-370 Crew Cab', 'i-370 Extended Cab']
    ],
    [
        'id' => 28,
        'option_value' => 'Jaguar',
        'models' => ['XJ', 'XK', 'S-Type', 'X-Type', 'XF', 'F-TYPE', 'F-PACE', 'XE', 'E-PACE', 'I-PACE']
    ],
    [
        'id' => 29,
        'option_value' => 'Jeep',
        'models' => ['Cherokee', 'Comanche Regular Cab', 'Wrangler', 'Grand Cherokee', 'Liberty', 'Commander', 'Compass', 'Patriot', 'Renegade', 'Wrangler Unlimited', 'Gladiator', 'Grand Cherokee L', 'Wrangler Unlimited 4xe', 'Grand Cherokee 4xe', 'Grand Wagoneer', 'Wagoneer', 'Grand Wagoneer L', 'Wagoneer L', 'Recon']
    ],
    [
        'id' => 30,
        'option_value' => 'Kia',
        'models' => ['Sephia', 'Sportage', 'Spectra', 'Optima', 'Rio', 'Sedona', 'Sorento', 'Amanti', 'Optima (2006.5)', 'Rondo', 'Borrego', 'Forte', 'Soul', 'Cadenza', 'Forte Koup', 'Forte5', 'K900', 'Optima Hybrid', 'Soul EV', 'Niro', 'Optima Plug-in Hybrid', 'Niro Plug-in Hybrid', 'Stinger', 'Niro EV', 'Telluride', 'K5', 'Seltos', 'Sorento Hybrid', 'Carnival', 'EV6', 'Sorento Plug-in Hybrid', 'Sportage Hybrid', 'Sportage Plug-in Hybrid', 'EV9']
    ],
    [
        'id' => 31,
        'option_value' => 'Lamborghini',
        'models' => ['Gallardo', 'Murcielago', 'Murcielago LP640', 'Aventador', 'Huracan', 'Urus']
    ],
    [
        'id' => 32,
        'option_value' => 'Land Rover',
        'models' => ['Range Rover', 'Defender 110', 'Defender 90', 'Discovery', 'Discovery Series II', 'Freelander', 'LR3', 'Range Rover Sport', 'LR2', 'LR4', 'Range Rover Evoque', 'Discovery Sport', 'Range Rover Velar', 'Defender 130']
    ],
    [
        'id' => 33,
        'option_value' => 'Lexus',
        'models' => ['ES', 'LS', 'SC', 'GS', 'LX', 'RX', 'IS', 'GX', 'IS F', 'HS', 'CT', 'LFA', 'NX', 'RC', 'LC', 'UX', 'RZ', 'TX']
    ],
    [
        'id' => 34,
        'option_value' => 'Lincoln',
        'models' => ['Continental', 'Mark VII', 'Town Car', 'Mark VIII', 'Navigator', 'LS', 'Blackwood', 'Aviator', 'Mark LT', 'Zephyr', 'MKX', 'MKZ', 'Navigator L', 'MKS', 'MKT', 'MKC', 'Nautilus', 'Corsair']
    ],
    [
        'id' => 35,
        'option_value' => 'Lotus',
        'models' => ['Elise', 'Exige', 'Exige S', 'Evora', 'Evora 400', 'Evora GT']
    ],
    [
        'id' => 36,
        'option_value' => 'Lucid',
        'models' => ['Air']
    ],
    [
        'id' => 37,
        'option_value' => 'Maserati',
        'models' => ['Coupe', 'GranSport', 'Quattroporte', 'GranTurismo', 'Ghibli', 'Levante', 'MC20', 'Grecale', '57', '62']
    ],
    [
        'id' => 38,
        'option_value' => 'Maybach',
        'models' => ['57', '62']
    ],
    [
        'id' => 39,
        'option_value' => 'MAZDA',
        'models' => ['323', '626', '929', 'B-Series Cab Plus', 'B-Series Regular Cab', 'MPV', 'MX-3', 'MX-5 Miata', 'MX-6', 'Navajo', 'Protege', 'RX-7', 'Millenia', 'Tribute', 'Protege5', 'MAZDA6', 'MAZDA3', 'RX-8', 'B-Series Extended Cab', 'MAZDA5', 'CX-7', 'CX-9', 'MAZDA2', 'CX-5', 'CX-3', 'MX-5 Miata RF', 'CX-30', 'MX-30', 'CX-50', 'CX-90', 'CX-70']
    ],
    [
        'id' => 40,
        'option_value' => 'McLaren',
        'models' => ['MP4-12C', '650S', '570S', '675LT', '570GT', '720S', '600LT']
    ],
    [
        'id' => 41,
        'option_value' => 'Mercedes Benz',
        'models' => ['190 E', '300 CE', '300 D', '300 E', '300 SD', '300 SE', '300 SL', '300 TE', '400 E', '400 SE', '500 E', '500 SEL', '500 SL', '600 SEL', '400 SEL', '500 SEC', '600 SEC', '600 SL', 'C-Class', 'E-Class', 'S-Class', 'SL-Class', 'CL-Class', 'CLK-Class', 'M-Class', 'SLK-Class', 'G-Class', 'SLR McLaren', 'CLS-Class', 'R-Class', 'GL-Class', 'GLK-Class', 'SLS-Class', 'Sprinter 2500 Cargo', 'Sprinter 2500 Crew', 'Sprinter 2500 Passenger', 'Sprinter 3500 Cargo', 'B-Class', 'CLA-Class', 'GLA-Class', 'CLA', 'GLA', 'GLC', 'GLE', 'GLE Coupe', 'Mercedes-AMG CLA', 'Mercedes-AMG GLA', 'Mercedes-AMG GLE', 'Mercedes-AMG GLE Coupe', 'Mercedes-AMG GT', 'Mercedes-AMG SL', 'Mercedes-AMG SLK', 'Mercedes-Maybach S 600', 'Metris Cargo', 'Metris Passenger', 'SL', 'SLK', 'CLS', 'GLC Coupe', 'GLS', 'Mercedes-AMG C-Class', 'Mercedes-AMG CLS', 'Mercedes-AMG E-Class', 'Mercedes-AMG G-Class', 'Mercedes-AMG GLC', 'Mercedes-AMG GLC Coupe', 'Mercedes-AMG GLS', 'Mercedes-AMG S-Class', 'Mercedes-AMG SLC', 'Mercedes-Maybach S-Class', 'Metris WORKER Cargo', 'Metris WORKER Passenger', 'SLC', 'Sprinter 3500 XD Cargo', 'Sprinter WORKER Cargo', 'Sprinter WORKER Passenger', 'A-Class', 'Sprinter 1500 Cargo', 'Sprinter 1500 Passenger', 'Sprinter 3500 Crew', 'Sprinter 3500 XD Crew', 'Sprinter 4500 Cargo', 'Sprinter 4500 Crew', 'GLB', 'Mercedes-AMG A-Class', 'Mercedes-AMG GLB', 'Mercedes-Maybach GLS', 'Mercedes-AMG EQS', 'Mercedes-EQ EQB', 'Mercedes-EQ EQS', 'Mercedes-EQ EQE', 'Mercedes-EQ EQE SUV', 'Mercedes-EQ EQS SUV']
    ],
    [
        'id' => 42,
        'option_value' => 'Mercury',
        'models' => ['Capri', 'Cougar', 'Grand Marquis', 'Sable', 'Topaz', 'Tracer', 'Villager', 'Mystique', 'Mountaineer', 'Marauder', 'Monterey', 'Mariner', 'Montego', 'Milan']
    ],
    [
        'id' => 43,
        'option_value' => 'MINI',
        'models' => ['Cooper', 'Convertible', 'Clubman', 'Hardtop', 'Countryman', 'Coupe', 'Roadster', 'Paceman', 'Hardtop 2 Door', 'Hardtop 4 Door']
    ],
    [
        'id' => 44,
        'option_value' => 'Mitsubishi',
        'models' => ['3000GT', 'Diamante', 'Eclipse', 'Expo', 'Galant', 'Mighty Max Macro Cab', 'Mighty Max Regular Cab', 'Mirage', 'Montero', 'Precis', 'Montero Sport', 'Lancer', 'Outlander', 'Endeavor', 'Raider Double Cab', 'Raider Extended Cab', 'Outlander Sport', 'i-MiEV', 'Lancer Evolution', 'Mirage G4', 'Eclipse Cross', 'Outlander PHEV']
    ],
    [
        'id' => 45,
        'option_value' => 'Nissan',
        'models' => ['240SX', '300ZX', 'King Cab', 'Maxima', 'NX', 'Pathfinder', 'Regular Cab', 'Sentra', 'Stanza', 'Altima', 'Quest', '200SX', 'Frontier King Cab', 'Frontier Regular Cab', 'Frontier Crew Cab', 'Xterra', '350Z', 'Murano', 'Pathfinder Armada', 'Titan Crew Cab', 'Titan King Cab', 'Armada', 'Versa', 'Rogue', '370Z', 'cube', 'GT-R', 'JUKE', 'LEAF', 'NV1500 Cargo', 'NV2500 HD Cargo', 'NV3500 HD Cargo', 'NV3500 HD Passenger', 'NV200', 'Rogue Select', 'NV200 Taxi', 'TITAN XD Crew Cab', 'Versa Note', 'Rogue Sport', 'TITAN Single Cab', 'TITAN XD King Cab', 'TITAN XD Single Cab', 'Kicks', '400Z', 'Ariya', 'Z']
    ],
    [
        'id' => 46,
        'option_value' => 'Oldsmobile',
        'models' => ['88', '98', 'Achieva', 'Bravada', 'Custom Cruiser', 'Cutlass Ciera', 'Cutlass Supreme', 'Silhouette', 'Toronado', 'Cutlass Cruiser', 'Aurora', 'Ciera', 'Cutlass', 'LSS', 'Regency', 'Intrigue', 'Alero']
    ],
    [
        'id' => 47,
        'option_value' => 'Panoz',
        'models' => ['Esperante']
    ],
    [
        'id' => 48,
        'option_value' => 'Plymouth',
        'models' => ['Acclaim', 'Colt', 'Colt Vista', 'Grand Voyager', 'Laser', 'Sundance', 'Voyager', 'Neon', 'Breeze', 'Prowler']
    ],
    [
        'id' => 49,
        'option_value' => 'Polestar',
        'models' => ['1', '2', '3', '5']
    ],
    [
        'id' => 50,
        'option_value' => 'Pontiac',
        'models' => ['Bonneville', 'Firebird', 'Grand Am', 'Grand Prix', 'LeMans', 'Sunbird', 'Trans Sport', 'Sunfire', 'Montana', 'Aztek', 'Vibe', 'GTO', 'G6', 'Montana SV6', 'Solstice', 'Torrent', 'G5', 'G8', 'G3', 'G6 (2009.5)']
    ],
    [
        'id' => 51,
        'option_value' => 'Porsche',
        'models' => ['911', '968', '928', 'Boxster', 'Cayenne', 'Carrera GT', 'Cayman', 'Panamera', 'Macan', '718 Boxster', '718 Cayman', '718 Spyder', 'Cayenne Coupe', 'Taycan', 'Taycan Cross Turismo']
    ],
    [
        'id' => 52,
        'option_value' => 'Ram',
        'models' => ['1500 Crew Cab', '1500 Quad Cab', '1500 Regular Cab', '2500 Crew Cab', '2500 Mega Cab', '2500 Regular Cab', '3500 Crew Cab', '3500 Mega Cab', '3500 Regular Cab', 'Dakota Crew Cab', 'Dakota Extended Cab', 'C/V', 'C/V Tradesman', 'ProMaster 1500 Cargo', 'ProMaster 2500 Cargo', 'ProMaster 3500 Cargo', 'ProMaster Cargo Van', 'ProMaster City', 'ProMaster Window Van', '1500 Classic Crew Cab', '1500 Classic Quad Cab', '1500 Classic Regular Cab']
    ],
    [
        'id' => 53,
        'option_value' => 'Rivian',
        'models' => ['R1S', 'R1T']
    ],
    [
        'id' => 54,
        'option_value' => 'Rolls Royce',
        'models' => ['Phantom', 'Ghost', 'Wraith', 'Dawn', 'Cullinan']
    ],
    [
        'id' => 55,
        'option_value' => 'Saab',
        'models' => ['900', '9000', '09-Mar', '09-May', '9-2X', '9-7X', '9-4X']
    ],
    [
        'id' => 56,
        'option_value' => 'Saturn',
        'models' => ['S-Series', 'L-Series', 'VUE', 'Ion', 'Relay', 'Aura', 'Outlook', 'SKY', 'Astra']
    ],
    [
        'id' => 57,
        'option_value' => 'Scion',
        'models' => ['xA', 'xB', 'tC', 'xD', 'iQ', 'FR-S', 'iA', 'iM']
    ],
    [
        'id' => 58,
        'option_value' => 'Smart',
        'models' => ['fortwo', 'fortwo electric drive', 'fortwo cabrio', 'fortwo electric drive cabrio', 'fortwo EQ cabrio', 'fortwo EQ coupe']
    ],
    [
        'id' => 59,
        'option_value' => 'SRT',
        'models' => ['Viper']
    ],
    [
        'id' => 60,
        'option_value' => 'Subaru',
        'models' => ['Justy', 'Legacy', 'Loyale', 'SVX', 'Impreza', 'Forester', 'Outback', 'Baja', 'B9 Tribeca', 'Tribeca', 'BRZ', 'XV Crosstrek', 'WRX', 'Crosstrek', 'Ascent', 'Solterra']
    ],
    [
        'id' => 61,
        'option_value' => 'Suzuki',
        'models' => ['Samurai', 'Sidekick', 'Swift', 'Esteem', 'X-90', 'Grand Vitara', 'Vitara', 'XL-7', 'Aerio', 'Forenza', 'Verona', 'Reno', 'SX4', 'XL7', 'Equator Crew Cab', 'Equator Extended Cab', 'Kizashi']
    ],
    [
        'id' => 62,
        'option_value' => 'Tesla',
        'models' => ['Model S', 'Model X', 'Model 3', 'Model Y', 'Cybertruck']
    ],
    [
        'id' => 63,
        'option_value' => 'Toyota',
        'models' => ['4Runner', 'Camry', 'Celica', 'Corolla', 'Cressida', 'Land Cruiser', 'MR2', 'Paseo', 'Previa', 'Regular Cab', 'Supra', 'Tercel', 'Xtra Cab', 'T100 Regular Cab', 'Avalon', 'T100 Xtracab', 'Tacoma Regular Cab', 'Tacoma Xtracab', 'RAV4', 'Sienna', 'Solara', 'Echo', 'Tundra Access Cab', 'Tundra Regular Cab', 'Highlander', 'Prius', 'Sequoia', 'Tacoma Double Cab', 'Matrix', 'Tundra Double Cab', 'Tacoma Access Cab', 'FJ Cruiser', 'Tundra CrewMax', 'Yaris', 'Venza', 'Prius c', 'Prius Plug-in Hybrid', 'Prius v', 'Mirai', '86', 'Avalon Hybrid', 'Camry Hybrid', 'Corolla iM', 'Highlander Hybrid', 'Prius Prime', 'RAV4 Hybrid', 'Yaris iA', 'C-HR', 'Corolla Hatchback', 'Corolla Hybrid', 'GR Supra', 'Yaris Hatchback', 'RAV4 Prime', 'Corolla Cross', 'GR86', 'Tundra Hybrid CrewMax', 'bZ4X', 'Corolla Cross Hybrid', 'Crown']
    ],
    [
        'id' => 64,
        'option_value' => 'VinFast',
        'models' => ['VF 8', 'VF 9']
    ],
    [
        'id' => 65,
        'option_value' => 'Volkswagen',
        'models' => ['Cabriolet', 'Corrado', 'Fox', 'Golf', 'GTI', 'Jetta', 'Passat', 'Eurovan', 'Golf III', 'Jetta III', 'Cabrio', 'New Beetle', 'Cabrio (New)', 'Golf (New)', 'GTI (New)', 'Jetta (New)', 'Passat (New)', 'Phaeton', 'R32', 'Touareg', 'Rabbit', 'Eos', 'GLI', 'Touareg 2', 'CC', 'Routan', 'Tiguan', 'Beetle', 'Jetta SportWagen', 'e-Golf', 'Golf GTI', 'Golf R', 'Golf SportWagen', 'Golf Alltrack', 'Tiguan Limited', 'Atlas', 'Arteon', 'Jetta GLI', 'Atlas Cross Sport', 'ID.4', 'Taos', 'ID.Buzz']
    ],
    [
        'id' => 66,
        'option_value' => 'Volvo',
        'models' => ['240', '740', '940', '960', '850', 'S90', 'V90', 'C70', 'S70', 'V70', 'S80', 'S40', 'V40', 'S60', 'XC70', 'XC90', 'S40 (New)', 'V50', 'C30', 'XC60', 'V60', 'XC40', 'XC40 Recharge', 'C40 Recharge', 'EX90']
    ],
];

foreach (CAR_OPTIONS as $option) {
    $option = [
        'id' => $option['id'],
        'option_type' => 'car.make',
        'option_value' => strtolower($option['option_value'])
    ];
    DB::table('options')->insert($option);
}

foreach (CAR_OPTIONS as $option) {
    foreach ($option['models'] as $model) {
        $model = [
            'parent' => $option['id'],
            'option_type' => 'car.model',
            'option_value' => strtolower($model)
        ];
        DB::table('options')->insert($model);
    }
}
