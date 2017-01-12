-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 12, 2017 at 09:05 AM
-- Server version: 5.7.16-0ubuntu0.16.04.1
-- PHP Version: 7.0.8-0ubuntu0.16.04.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blogDB`
--

-- --------------------------------------------------------

--
-- Table structure for table `Story`
--

CREATE TABLE `Story` (
  `IdStory` int(11) NOT NULL,
  `TitleStory` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `DateStory` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `TextStory` longtext COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `Story`
--

INSERT INTO `Story` (`IdStory`, `TitleStory`, `DateStory`, `TextStory`) VALUES
(1, 'Every single piece of plastic ever made still exists', '2017-01-11 12:00:19', 'From the moment we wake up in the morning and brush our teeth, to when we watch TV at the end of the day, plastic is all around us. So much so that it can be hard to imagine leaving the supermarket without at least one item that isn’t in a plastic container.\r\n\r\nIt hasn t always been like this. In fact, there are people alive today that were born in an almost plastic-free world. Imagine going to the beach and not finding a single piece of washed up plastic trash.\r\n\r\nWhat, in the course of history, caused such a change? There are a few stories of what drove the demand for modern plastics. One version is that, in the second half of the 19th century, companies in the billiard ball industry realised they needed a substitute for ivory. By then, humans were consuming at least one million pounds of the material each year, and newspapers were reporting that elephants would soon become extinct if that pace continued.\r\n\r\nAnd so the race to come up with a new material began. Over the course of several decades, chemists from Europe and US searched for solutions. After years of trial and error, they discovered plastic as we know it today, and by the beginning of the 20th century, people could buy hair combs and clothes with buttons that were not made of ivory.\r\n\r\nEven with this scientific development, there were still no plastic bags flying around the cities, or fish being caught up in plastic rings. So, what triggered this explosion of plastic in our lives?\r\n\r\nTwo important factors pushed manufacturers to embrace this substance. First was the development of mass production assembly lines. Before that, factories required a lot of labour to manufacture even a single product, making plastic prohibitively time consuming.\r\n\r\nThe second factor was World War II. The material was used in many ways, from bazooka barrels to aircraft components, and between 1939 and 1945, the production of plastic grew by almost four times. With the end of the war, plastic companies needed to keep making a profit, so they had to switch from military vehicles to Barbie dolls. Plastic was so cheap, everyone could afford it: plastic containers, plastic furniture, plastic toys. And that s when the material gained widespread traction.'),
(2, 'How does ‘organic food’ affect your body?', '2017-01-11 12:00:19', 'Is the food you and your family eat everyday really free from synthetic chemical pesticides? Join us. Challenge yourself to switch to organic food  and help promote pesticide-free food for families everywhere. Together, we can fix the broken food system! To know how organic food actually affects your body, two Japanese families, both with two children who usually eat mostly conventional food, challenged themselves to switch their diet to 100% organic food for 10 days Before and after 10 days, urine samples from these two families were collected and tested to check for different levels of pesticides in their bodies. The study was commissioned by Greenpeace Japan and testing samples were analysed at independent laboratory in Germany (full report here).\r\n\r\nWe found that pesticides levels in the urine showed a striking decrease after eating organic food, and that there were comparatively higher levels of some pesticides among the four children, compared to the adults. Children can be very susceptible to the effects of toxic chemicals as their organs are still in development. A child’s developing brain is also more susceptible to neurotoxicants, and the dose of pesticides per body weight is likely to be higher in children due to their small size.\r\n\r\nThe study shows that eating organic food is an effective way to reduce chemical pesticides in the body. But to promote really “chemical pesticides free” life, the solution is to switch diet to ecological food or  “eco food”.\r\nSo, what is “eco food”?\r\n\r\nEco food and organic food have many things in common. Both are crops or livestock grown without chemical pesticides, synthetic fertilizers, GMOs or antibiotics. But eco food goes a step further in that is also means food that is​ locally grown, seasonal, nutritious and promotes biodiversity. It is independently produced by innovative farmers, who receive a fair remuneration for their crops.\r\nWill you take the challenge?\r\n\r\nIt seems the greatest barrier to more families eating more organic food  isn’t the lack of benefits for people and the planet, but its availability and affordability. Consumers can make a real difference to this situation by letting the retailers that you shop from know that you want to change how you eat.\r\n\r\nJoin us. Challenge yourself to switch to organic food  and help promote pesticide-free food for families everywhere. Together, we can fix the broken food system!'),
(3, 'Are there human rights abuses in your seafood?', '2017-01-11 12:00:19', 'Migrant workers from Cambodia and Myanmar are being used as forced labour in the Thai fishing industry. Using tricks of deception, non-binding verbal agreements and induced debt, these workers catch fish both for human consumption and the pet food industry. Now, a new report from Greenpeace Southeast Asia exposes how crackdowns on human rights abuse in the Thai fishing industry has forced vessels to operate further...decreasing their chances of being caught and continuing their illegal practices out of sight, out at sea. Last year, the Associated Press exposed human rights violations in Thailand’s notorious fishing industry, sending shockwaves around the world. At the heart of the tragedy lay the often callous and illegal activities of companies in Thailand’s distant water fishing sector. Consumers around the globe were inspecting their cans of tuna and wondering what horrors they were buying with their seafood.\r\n\r\nWhen the threat of enforcement and straightening things up are imminent, the fleet chose to ship out rather than shape up, and now a new Greenpeace Southeast Asia report, Turn the Tide, reveals cases of human rights abuse continuing onboard Thai distant water fishing vessels up to 2016. The fleet discussed in the report is known to supply to global seafood markets, particularly the food service and pet food sector. The vessels in question are mainly bottom trawlers and huge refrigerated cargo vessels, or reefers, capable of hauling thousands of tons of fish at a time. The reefers enable the trawlers to stay at sea for many months at a time so they can kill as many fish as they want, far from prying eyes and regulation. With the fishing fleets operating in distant places, such as the environmentally sensitive Saya de Malha Bank in the Indian Ocean, the reefers pick up fish to trans-ship to Thai ports for processing, deliver supplies, and sometimes trafficked workers.\r\n\r\nMany of the crew onboard these ships are migrant workers from Cambodia and Myanmar, who meet the internationally-accepted definitions of victims of forced labour. By their own accounts, the sea had swallowed up their hopes and dreams. In January, Greenpeace Southeast Asia went to Ranong province, southern Thailand to investigate reports of deaths of fishers on two Thai trawlers returning from the Saya de Malha Bank. At the time, there were reported outbreaks of Beriberi - a disease, caused by thiamine (B1) deficiency, that affects both the cardiovascular and the nervous systems - in the Thai fishing fleet.\r\n\r\nGreenpeace Southeast Asia interviewed Cambodian crew members who worked on one of the Thai vessels. They spoke of nine continuous months at sea, working extremely long hours, with only three to four hours of rest per day, and no time off. To make things worse, they were fed a very poor diet. The survivors explained how supplies would be transshipped at sea roughly every 90 days, by reefers coming from the Thai port of Samut Sakhon to the Saya de Malha Bank. Fresh vegetables and meat would be finished after 10 and 20 days, respectively — and the rest of the time the crew’s diet  was polished white rice and fish. Daily exhaustion and poor diets made the men sick and weak. Some to the point of death A Cambodian fisherman recovers from beriberi at Ranong Hospital. Thai government investigations determined that the hospitalisations and deaths from beriberi outbreak aboard these vessels were directly caused by a business model based on transshipment at sea.\r\n\r\nThe men told stories of deception and exploitation by the vessel operators, who deceived them about the true nature of their employment, the terms of their contract, and their pay.  \r\n\r\nA crew member interviewed by Greenpeace claimed that fishers would incur around THB 20,000 (US$571) in debt to a broker before even stepping aboard. On top of this would be an advance of THB 30,000 (US$857), to cover supplies or send home to their families. The crew member reported that the men would work have to work for around six months to pay that first debt off before becoming eligible to request another advance.\r\n\r\nDeceiving migrants is a typical strategy for trafficking workers into the Thai fishing industry, and deceptive recruitment arrangements are commonly used to trick people into debt bondage and trafficking. All of the 15 victims interviewed by Greenpeace also claimed their families reported that brokers were deducting significant portions, up to 50%, of the advances paid to workers against their earnings. Juvenile sharks on sale at the public fishing port in Ranong, southern Thailand. Thai gillnetters would catch a variety of fish from the Saya de Malha Bank, including a reported 50% by-catch of sharks. \r\n\r\nThis vicious cycle of human trafficking, abuse and exploitation, aided by illegal transshipments at sea, must end. To ensure that fishing is regulated and that workers’ rights are protected from abuse and exploitation, transhipment at sea must be banned. Support for such a measure is growing quickly across governments, industry and NGOs. The evidence in this report only strengthens the case for action. If the Thai government is serious about addressing the challenges in its fishing fleet it needs to act quickly on this issue.\r\n\r\nAlongside government, the Thai seafood and fishing industry has an obligation to be more accountable and to provide fair compensation to its workforce. After all, these hardworking fishermen allow the industry to exist and prosper.'),
(4, 'Samsung, can you hear us?', '2017-01-11 12:00:19', 'Over the past week we ve watched as thousands of people around the world joined our urgent call for Samsung to come up with a concrete plan to reuse or recycle 4.3 million Galaxy Note7s.\r\n\r\nFrom Hong Kong to Washington DC, you called Samsung’s customer support number to ask exactly whether or not the devices will be disposed of environmentally; you tweeted #GalaxyNote7, which turned into a trending topic in Mexico and took the message directly to their HQ; and most of all you put pressure on Samsung to do the right thing! People around the world picked up their phones and called Samsung directly to ask: “What’s the plan?” Hundreds of people from Korea, Hong Kong, Taiwan, Mexico, the US, the UK, Germany, the Netherlands, Australia, Colombia and more took the power in their hands and asked for an answer.Recently, our Greenpeace Korea colleagues took the message directly to Samsung’s headquarters, calling on CEO Kwon Oh-hyun to show real leadership and rethink how they design their products and reuse the precious materials that go into making them.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Story`
--
ALTER TABLE `Story`
  ADD PRIMARY KEY (`IdStory`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Story`
--
ALTER TABLE `Story`
  MODIFY `IdStory` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
