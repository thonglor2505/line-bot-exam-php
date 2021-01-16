<?php
echo "Hello LINE BOT";
/**
 * BubbleContainerBuilder constructor.
 *
 * @param ContainerDirection|null $direction
 * @param BoxComponentBuilder|null $headerComponentBuilder
 * @param ImageComponentBuilder|null $heroComponentBuilder
 * @param BoxComponentBuilder|null $bodyComponentBuilder
 * @param BoxComponentBuilder|null $footerComponentBuilder
 * @param BubbleStylesBuilder|null $stylesBuilder
 */
 // ส่วนประกอบของ Bubble ประกอบด้วย parameter ต่างๆ ดังนี้
/*public function __construct(
    $direction = null, // กำหนด NULL หรือ "ltr" หรือ "rtl"
    $headerComponentBuilder = null, // box component ของ header block
    $heroComponentBuilder = null, // image component ของ hero block
    $bodyComponentBuilder = null,  // box component ของ body block
    $footerComponentBuilder = null,  // box component ของ footer block
    $stylesBuilder = null // style ของแต่ละ block
)*/
 
$textReplyMessage = new BubbleContainerBuilder(
    "ltr",  // กำหนด NULL หรือ "ltr" หรือ "rtl"
    new BoxComponentBuilder(
        "vertical",
        array(
            new TextComponentBuilder("This is Header")
        )
    ),
    new ImageComponentBuilder(
        "https://www.ninenik.com/images/ninenik_page_logo.png",NULL,NULL,NULL,NULL,"full","20:13","cover"),
    new BoxComponentBuilder(
        "vertical",
        array(
            new TextComponentBuilder("This is Body")
        )
    ),
    new BoxComponentBuilder(
        "vertical",
        array(
            new TextComponentBuilder("This is Footer")
        )
    ),
    new BubbleStylesBuilder( // style ทั้งหมดของ bubble
        new BlockStyleBuilder("#FFC90E"),  // style สำหรับ header block
        new BlockStyleBuilder("#EFE4B0"), // style สำหรับ hero block
        new BlockStyleBuilder("#B5E61D"), // style สำหรับ body block
        new BlockStyleBuilder("#FFF200") // style สำหรับ footer block
    )
);
$replyData = new FlexMessageBuilder("Flex",$textReplyMessage);
