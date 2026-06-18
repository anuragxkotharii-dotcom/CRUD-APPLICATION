

-- Create the table
CREATE TABLE IF NOT EXISTS `scp` (
    `id`           INT(11)      NOT NULL AUTO_INCREMENT,
    `item_number`  VARCHAR(20)  NOT NULL,
    `object_class` VARCHAR(50)  NOT NULL,
    `containment`  TEXT         NOT NULL,
    `description`  TEXT         NOT NULL,
    `image`        VARCHAR(255) DEFAULT NULL,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


INSERT INTO `scp` (`item_number`, `object_class`, `containment`, `description`, `image`) VALUES



-- SCP-002
('SCP-002',
'Euclid',
'SCP-002 is to remain connected to a suitable power supply at all times, to keep it in what appears to be a recharging mode. In case of electrical outage, the emergency barrier between the object and the facility is to be closed and the immediate area evacuated. Once facility power is re-established, alternating bursts of X-ray and ultraviolet light must strobe the area until SCP-002 is re-affixed to the power supply and returned to recharging mode. Containment area is to be kept at negative air pressure at all times.

Teams including a minimum of two (2) members are required within 20 meters of SCP-002 or its containment area. Personnel should maintain physical contact with one another at all times to confirm there is another person present, as perception may be dulled, skewed, or influenced by proximity to the object.

No personnel below Level 3 are permitted within SCP-002. This requirement may be waived via written authorization from two (2) off-site Level 4 administrators.',
'SCP-002 resembles a tumorous, fleshy growth with a volume of roughly 60 cubic metres. An iron valve hatch on one side leads to its interior, which appears to be a standard low-rent apartment of modest size. One wall of the room possesses a single window, though no such opening is visible from the exterior. The room contains furniture which, upon close examination, appears to be sculpted bone, woven hair, and various other biological substances produced by the human body. All matter tested thus far show independent or fragmented DNA sequences for each object in the room.

To date, subject has been responsible for the disappearances of seven personnel. It has also in its time at the facility further furnished itself with two lamps, a throw rug, a television, a radio, a beanbag chair, three books in an unknown language, four children\'s toys, and a small potted plant.',
'SCP2.jpg'),




-- SCP-003
('SCP-003',
'Euclid',
'SCP-003 is to be maintained at a constant temperature of no less than 35°C and ideally kept above 100°C. No living multicellular organisms of Category IV or higher complexity may be allowed to come into contact with SCP-003.

In event of total power failure, if SCP-003-1 begins to increase its mass, assigned personnel must engage in skin contact with SCP-003-1. Ideally, personnel may use their body heat to return SCP-003-1 to above the critical temperature; however, skin contact must be maintained even in event of SCP-003 reaching activation temperature, lasting at minimum until SCP-003-1 advances fully to its second growth stage.

SCP-003-1 must not be removed from SCP-003-2 except in case of emergency procedures detailed above. Any significant change in SCP-003-2\'s rune activity should be reported within three (3) hours of occurrence.',
'SCP-003 consists of two related components of separate origin, referred to as SCP-003-1 and SCP-003-2.

SCP-003-1 appears to be composed of chitin, hair, and nails of unknown biology, arranged in a configuration similar to that of a computer motherboard. Testing reveals SCP-003-1 to predate earliest known circuit boards by a factor of thousands of years. SCP-003-1 is considered sentient but not actively dangerous except under certain conditions.

SCP-003-1 was found on a stone tablet, SCP-003-2, on which it currently resides. The runes on SCP-003-2 are not part of any known language, and emit pale, flickering light patterns. It is considered probable that SCP-003-2 was created for the purpose of containing SCP-003-1.',
'SCP_3.jpg'),




-- SCP-004
('SCP-004',
'Euclid',
'When handling items SCP-004-2 through SCP-004-13, proper procedure is vital. The items are not permitted to be moved off-site unless accompanied by two Level 4 security personnel. Under no circumstances should any other component of SCP-004 be taken through SCP-004-1. The effects of doing so are as yet unknown, and the current cost of experimentation makes further research impractical.

Should any of the objects contained within SCP-004-1 breach containment, or the facility be breached, the keys must be brought inside and the door closed prior to activation of Site 62\'s on-site warhead. Unauthorized removal of keys from the testing area is grounds for immediate termination.

Level 1 clearance is required for basic access to SCP-004-1; Level 4 clearance is required for use of SCP-004-2 to -13.',
'SCP-004 consists of an old wooden barn door (SCP-004-1) and a set of twelve rusted steel keys (SCP-004-2 through SCP-004-13). The door itself is the entrance to an abandoned factory in [DATA EXPUNGED].

Testing on SCP-004 reveals that ten of the keys open SCP-004-1 on a dimension where the laws of physics and topology are significantly different than those of our home dimension. Test subjects meeting these hostile conditions are torn apart, their body parts deposited in various locations, only three of which have been verified to be on Earth.

SCP-004 seems to propagate spatiotemporal anomalies. Personnel leaving the facility report losing time. Those who have been in the site for weeks insist that they had only been in the facility for several days.',
'SCP_4.webp'),




-- SCP-005
('SCP-005',
'Safe',
'SCP-005 poses no immediate risk in any direct sense. Even so, its unique functions require special measures be taken to restrict access and manipulation of the object. Approval of at least one (1) Level 4 personnel is required for the removal of the object from its containment area.

SCP-005 may be used as a replacement for lost security passes, but only under the supervision of at least one (1) Level 4 personnel. SCP-005 may not be used for vending machine repairs, opening lockers, or for any personnel\'s spare home key. Removal of the object from the compound will result in immediate termination.',
'In appearance, SCP-005 resembles an ornate key, displaying the characteristics of a typical mass produced key used in the 1920s. The key was discovered when a civilian used it to infiltrate a high security facility. SCP-005 seems to have the unique ability to open any and all forms of lock, be they mechanical or digital, with relative ease. The origin of this ability has yet to be determined.

While SCP-005 has been shown to be effective in removing almost any form of locking device, further experiments have shown that efforts to disguise the purpose or identity of a lock have proven at least somewhat successful in defeating SCP-005\'s ability. In approximately 50% of cases where a volunteer was not able to identify a locking device as such, SCP-005 was not successful in deactivating the device.',
'SCP_5.jpg'),



-- SCP-006
('SCP-006',
'Safe',
'Whereas the nature of SCP-006 does not warrant any extensive containment, a certain level of secrecy is necessary regarding the object\'s existence and properties. All personnel interacting with SCP-006 in any physical way are required to wear modified Class VI BNC suits.

Procedures with SCP-006 are to be carried out under extreme surveillance. Any procedure in which liquid is acquired from SCP-006 must be approved by three (3) O5 level personnel. The liquid is to be transferred in a Quad-Sealant Container and under armed guard.

If at any time personnel come into contact with SCP-006 or liquid from SCP-006, they are to be confined and terminated after sufficient studies are done. Due to the nature of SCP-006, the most effective termination method is incineration.',
'SCP-006 is a very small spring located 60 km west of Astrakhan. Foundation Command was aware of its existence since the 19th century, but were unable to secure it until 1991 due to political reasons. On the spot of the spring, a chemical factory has been constructed as a disguise, with the majority of laborers under Foundation and/or Russian control.

The liquid emitted from the spring has been chemically identified as simple mineral water in 1902, but has the unusual property of "health". Ingesting the liquid produces the following properties in human beings: the ability to regenerate DNA damaged by sufficient duplication, heightened excitement of cellular duplication, vastly improved abilities in the repair of damaged tissue, and a frightening increase in the effectiveness of the human immune system.',
'SCP_6.jpg');



SELECT id, item_number, object_class, image FROM scp;
