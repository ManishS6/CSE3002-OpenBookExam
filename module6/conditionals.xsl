<xsl:for-each select="booklist/book">
<tr>
<xsl:if test="category='Fiction-Thriller'">
<xsl:attribute name="bgcolor">red</xsl:attribute>
</xsl:if>
<td><xsl:value-of select="author" /><td>
<td><xsl:value-of select="title" /><td>
<td><xsl:value-of select="category" /><td>
<td><xsl:value-of select="price" /><td>
</tr>
</xsl:for-each>