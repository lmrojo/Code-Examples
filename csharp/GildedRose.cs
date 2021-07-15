using System.Collections.Generic;

namespace csharp
{
    public class GildedRose
    {
        IList<IItem> Items;
        public GildedRose(IList<IItem> Items)
        {
            this.Items = Items;
        }

        public void UpdateQuality()
        {
            foreach (IItem item in Items)
            {
                item.UpdateQuality();
            }
        }
    }
}
