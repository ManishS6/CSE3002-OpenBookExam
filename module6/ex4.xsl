<?xml version="1.0"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<xsl:template match="/">
<html>
<head>
    <title>Book Titles and Authors</title>
</head>
<body>
    <h2>Book titles:</h2>
    <ul>
        <xsl:for-each select="//book">
        <li>
            <xsl:value-of select="title"/>
        </li>
        </xsl:for-each>
    </ul>
    <h2>Book authors:</h2>
    <ul>
        <xsl:for-each select="//book">
        <li>
        <xsl:value-of select="author"/>
        </li>
        </xsl:for-each>
    </ul>
</body>
</html>
</xsl:template>
</xsl:stylesheet>