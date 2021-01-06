<xsl:for-each select="booklist/book[category='Java']">
<tr>
<td><xsl:value-of select="author"/></td>
<td><xsl:value-of select="title"/></td>
<td><xsl:value-of select="category"/></td>
<td><xsl:value-of select="price"/></td>
</tr>
</xsl:for-each>